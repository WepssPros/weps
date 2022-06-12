<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Calonvendor;
use App\Models\ProductVendor;
use App\Models\Transaction;
use App\Models\TransactionItem;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DashboardController extends Controller
{
    public function index()
    {
        $mitraaktif = ProductVendor::count();

         $transactions = Transaction::with(['user'])->latest()->paginate(5);
         $calonvendors = Calonvendor::with(['user'])->latest()->paginate(5);
         $pesanansuccess = Transaction:: with(['user'])->where('status', "SUCCESS")->count();
         $pesananpending = Transaction:: with(['user'])->where('status', "PENDING")->count();
         $pesanancancel = Transaction:: with(['user'])->where('status', "CANCELLED")->count();
         $pesananfailed = Transaction:: with(['user'])->where('status', "FAILED")->count();

         $pendapatan = Transaction::where('status', "SUCCESS")->sum('total_price');
         $pendapatandeposito = Transaction::where('status', "DPSUCCESS")->sum('deposito');

         $pendapatankeseluruhan = $pendapatan + $pendapatandeposito;

        if(request()->ajax()) {
            $query = TransactionItem::with(['product','vendor','user','transaction']);

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <a class="inline-block border border-blue-700 bg-blue-700 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-blue-800 focus:outline-none focus:shadow-outline"
                            href="' . route('dashboard.transaction.show', $item->id) . '">
                            Show
                        </a>
                        <a class="inline-block border border-gray-700 bg-gray-700 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline"
                            href="' . route('dashboard.transaction.edit', $item->id) . '">
                            Edit
                        </a>';
                })


                ->editColumn('total_price', function ($item) {
                    return number_format($item->total_price);
                })
                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.admin.dashboard.index', [
             'mitraaktif' => $mitraaktif,
             'transactions' => $transactions,
             'calonvendors' => $calonvendors,
             'pesanansuccess' => $pesanansuccess,
             'pesananpending' => $pesananpending,
             'pesanancancel' => $pesanancancel,
             'pesananfailed' => $pesananfailed,
             'pendapatan' => $pendapatan,
             'pendapatandeposito' => $pendapatandeposito,
             'pendapatankeseluruhan' => $pendapatankeseluruhan,
        ]);
    }
}
