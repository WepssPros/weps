<?php

namespace App\Http\Controllers\Vendorss;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\TransactionItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class VendorTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Transaction $transaction)
    {

        //NOTED REHAN NOTED INI PENTING RELASI ANTAR SEMUA TABLE

        if (request()->ajax()) {
          $query = TransactionItem::with(['transaction.user','product.category','user.vendors','vendor.users'])
                            ->whereHas('vendor', function($vendor){
                                $vendor->where('users_id', Auth::user()->id);
                            })->get();

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <a class="inline-block border border-blue-700 bg-blue-700 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-blue-800 focus:outline-none focus:shadow-outline"
                            href="' . route('dashboard.vendors.transaction.show', $item->transaction->id) . '">
                            Show
                        </a>
                        ';
                })
                ->editColumn('total_price', function ($item) {
                    return number_format($item->product->price * $item->quantity);
                })
                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.vendors.dashboard.transaction.index', compact('transaction'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function show(Transaction $transaction)
    {
        $transactions = TransactionItem::with(['product','vendor'])->where('transactions_id', $transaction->id)->get();
        if(request()->ajax())
        {
            $query = TransactionItem::with(['product','vendor'])->where('transactions_id', $transaction->id);

            return DataTables::of($query)
            ->editColumn('product.price', function($item){
                return number_format($item->product->price);
            })
            ->rawColumns(['action'])
            ->make();
        }
        return view('pages.vendors.dashboard.transaction.show', compact('transaction','transactions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
