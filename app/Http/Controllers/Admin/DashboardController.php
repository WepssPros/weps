<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Calonvendor;
use App\Models\Transaction;
use App\Models\TransactionItem;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DashboardController extends Controller
{
    public function index()
    {

         $transactions = Transaction::with(['user'])->latest()->paginate(5);
         $calonvendors = Calonvendor::with(['user'])->latest()->paginate(5);



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
             'transactions' => $transactions,
             'calonvendors' => $calonvendors,
        ]);
    }
}
