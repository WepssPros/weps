<?php

namespace App\Http\Controllers\Vendorss;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class VendorDashboardController extends Controller
{
    public function index(){
        $users = User::all()->count();
        $products = Product::with('category','vendor','galleries','user')->where('users_id', Auth::user()->id)->count();
        $transactions = TransactionItem::with(['transaction.user','product.category','user.vendors','vendor.users'])
                            ->whereHas('vendor', function($vendor){
                                $vendor->where('users_id', Auth::user()->id);
                            })->latest()->paginate(5);

        $pesanans = TransactionItem::with(['transaction.user','product.category','user.vendors','vendor.users'])
                            ->whereHas('vendor', function($vendor){
                                $vendor->where('users_id', Auth::user()->id);
                            })->count();


        $pendapatan = TransactionItem::with(['transaction.user','product.category','user.vendors','vendor.users'])
                            ->whereHas('vendor', function($vendor){
                                $vendor->where('users_id', Auth::user()->id);

                            });

        $revenue = $pendapatan->get()->reduce(function($carry, $item) {
            return  $carry + $item->product->price * $item->quantity ;
        });

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
                    return number_format($item->total_price);
                })
                ->rawColumns(['action'])
                ->make();
        }



        return view('pages.vendors.dashboard.index',[
            'transactions' => $transactions,
            'pesanans' => $pesanans,
            'products' => $products,
            'revenue' => $revenue,
            'users' => $users,


        ]);
    }
}
