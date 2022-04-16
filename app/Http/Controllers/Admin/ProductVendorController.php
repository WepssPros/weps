<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductVendorRequest;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductVendor;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProductVendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(User $users)
    {
        if (request()->ajax()) {
            $query = ProductVendor::with(['users'])->get();

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                     <a class="inline-block border border-blue-700 bg-blue-700 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-blue-800 focus:outline-none focus:shadow-outline"
                            href="' . route('dashboard.vendors.gallery.index', $item->id) . '">
                            Gallery
                        </a>
                        <a class="inline-block border border-gray-700 bg-gray-700 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline"
                            href="' . route('dashboard.vendor.edit', $item->id) . '">
                            Edit
                        </a>
                         <a class="inline-block border border-gray-700 bg-gray-700 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline"
                            href="' . route('dashboard.vendor.show', $item->id) . '">
                            Show
                        </a>
                        <form class="inline-block" action="' . route('dashboard.vendor.destroy', $item->id) . '" method="POST">
                        <button class="border border-red-500 bg-red-500 text-white rounded-md px-2 py-1 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline" >
                            Hapus
                        </button>
                            ' . method_field('delete') . csrf_field() . '
                        </form>';
                })
                ->editColumn('price', function ($item) {
                    return number_format($item->price);
                })
                ->rawColumns(['action'])
                ->make();
        }

        return view('pages.admin.dashboard.vendorss.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vendors = User::all();
        return view('pages.admin.dashboard.vendorss.create', compact('vendors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductVendorRequest $request)
    {



        $data = $request->all();

        ProductVendor::create($data);

        return redirect()->route('dashboard.vendor.index',);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $vendor)
    {
        // $vendors = ProductVendor::with(['users','galleries'])->where('id', $vendor)->get();

        $vendors = ProductVendor::with(['users','galleries'])->where('id',$vendor)->firstOrFail();

        // return view('pages.frontend.details', compact('product','recommendations'));
        return view ('pages.admin.dashboard.vendorss.show', compact('vendors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductVendor  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductVendor $vendor)
    {

        return view('pages.admin.dashboard.vendorss.edit',[
         'item' => $vendor
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductVendorRequest $request, ProductVendor $vendor)
    {
        $vendors = User::all();
        $data = $request->all();

        $vendor->update($data);

        return redirect()->route('dashboard.vendor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductVendor $vendor)
    {
        $vendor->delete();

        return redirect()->route('dashboard.vendor.index');
    }
}
