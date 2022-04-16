<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Calonvendor;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CalonVendorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       if (request()->ajax()) {
            $query = Calonvendor::with(['user']);

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <a class="inline-block border border-gray-700 bg-gray-700 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline"
                            href="' . route('dashboard.calonvendor.edit', $item->id) . '">
                            Edit
                        </a>
                        <a class="inline-block border border-blue-700 bg-blue-700 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-blue-800 focus:outline-none focus:shadow-outline"
                            href="' . route('dashboard.calonvendor.show', $item->id) . '">
                            Show
                        </a>
                        <form class="inline-block" action="' . route('dashboard.calonvendor.destroy', $item->id) . '" method="POST">

                        </form>';
                })
                ->editColumn('price', function ($item) {
                    return number_format($item->price);
                })
                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.admin.dashboard.calonvendor.index');
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
        $data = $request->all();

        Calonvendor::create($data);

        return redirect()->route('dashboard.calonvendor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Calonvendor  $calonvendor
     * @return \Illuminate\Http\Response
     */
    public function show(Calonvendor $calonvendor)
    {
        if(request()->ajax())
        {
            $query = Calonvendor::with(['user'])->where('users_id', $transaction->id);

            return DataTables::of($query)
            ->editColumn('product.price', function($item){
                return number_format($item->product->price);
            })
            ->rawColumns(['action'])
            ->make();
        }
        return view('pages.admin.dashboard.calonvendor.show', compact('calonvendor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Calonvendor  $calonvendor
     * @return \Illuminate\Http\Response
     */
    public function edit(Calonvendor $calonvendor)
    {
       return view('pages.admin.dashboard.calonvendor.edit',[
         'item' => $calonvendor
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Calonvendor  $calonvendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Calonvendor $calonvendor)
    {
        $data = $request->all();

        $calonvendor->update($data);

        return redirect()->route('dashboard.calonvendor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Calonvendor  $calonvendor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calonvendor $calonvendor)
    {
        $calonvendor->delete();

        return redirect()->route('dashboard.calonvendor.index');
    }
}
