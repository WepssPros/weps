<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\ProductVendor;
use App\Models\Transaction;
use App\Models\TransactionItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function all(Request $request){

        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        $status = $request->input('status');


        if($id){
            $transaction = Transaction::with(['items.product','items.vendor'])->find($id);
            if($transaction){
                return ResponseFormatter::success(
                    $transaction,
                    'Data Transaksi Berhasil di ambil'
                );
            }
            else
            {
                return ResponseFormatter::error(
                    null,
                    'Data Transaksi Tidak ada ',
                    404
                );
            }
        }



        $transaction = Transaction::with(['items.product','items.vendor'])->where('users_id', Auth::user()->id);

        if($status)
            {
                $transaction->where('status', $status);
            }
            return ResponseFormatter::success(
                $transaction->paginate($limit),
                'Data List Transaksi berhasil di ambil'
            );

    }

    public function checkout(Request $request){
        $request->validate([
            'items' => 'required|array',
            'items.*.id' =>'exists:products,id',
            'name_acara' =>'required',
            'address'=>'required',
            'tgl_acara'=>'required',
            'deposito' =>'required',
            'total_price' => 'required',
            'shipping_price' => 'required',
            'status' =>'required|in:PENDING,SUCCESS,CANCCELED,PROCCESS',
        ]);

        $transaction =  Transaction::create([
            'users_id' => Auth::user()->id,
            'name_acara' => $request->name_acara,
            'address' => $request->address,
            'tgl_acara' => $request->tgl_acara,
            'deposito' => $request->deposito,
            'total_price' => $request->total_price,
            'shipping_price' => $request->shipping_price,
            'status' => $request->status,
        ]);

        foreach ($request->items as $product) {
            TransactionItem::create([
                'users_id' => Auth::user()->id,
                'products_id' => $product['id'],
                'vendors_id' => $product['v_id'],
                'transactions_id' =>$transaction->id,
                'quantity' => $product['quantity']
            ]);
        }




        return ResponseFormatter::success($transaction->load('items.product','items.vendor'),'Transaksi Berhasil');
    }
}
