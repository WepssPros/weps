<?php

namespace App\Http\Controllers\Vendorss;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\ProductVendor;
use App\Models\User;
use App\Models\VendorProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class VendorProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $products = Product::with('category','vendor','galleries','user')->where('users_id', Auth::user()->id)->paginate(5);

        if (request()->ajax()) {
            $query =  Product::with('category','vendor','user')->where('users_id', Auth::user()->id)->get()->all();

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <a class="inline-block border border-blue-700 bg-blue-700 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-blue-800 focus:outline-none focus:shadow-outline"
                            href="' . route('dashboard.vendors.product.gallery.index', $item->id) . '">
                            Gallery
                        </a>

                        <a class="inline-block border border-gray-700 bg-gray-700 text-white rounded-md px-2 py-1 m-1 transition duration-500 ease select-none hover:bg-gray-800 focus:outline-none focus:shadow-outline"
                            href="' . route('dashboard.vendors.product.edit', $item->id) . '">
                            Edit
                        </a>
                        <form class="inline-block" action="' . route('dashboard.vendors.product.destroy', $item->id) . '" method="POST">
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

        return view('pages.vendors.dashboard.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $users = User::all();
        $vendors = ProductVendor::with('users')->where('users_id', Auth::user()->id)->get()->all();
        $categories = ProductCategory::all();
        return view('pages.vendors.dashboard.product.create', compact('categories','vendors','users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $data = $request->all();

        Product::create($data);

        return redirect()->route('dashboard.vendors.product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VendorProduct  $vendorProduct
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $products = Product::with('category','vendor','galleries')->where('vendors_id', Auth::user()->id)->latest()->get();
        return view('pages.vendors.dashboard.product.show', compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $vendorProduct
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $users = User::all();
        $vendors = ProductVendor::with('users')->where('users_id', Auth::user()->id)->get()->all();
        $categories = ProductCategory::all();
        return view('pages.vendors.dashboard.product.edit',[
            'user' => $users,
            'item' => $product,
            'categories' => $categories,
            'vendors' => $vendors,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $vendorProduct
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $data = $request->all();

        $product->update($data);

        return redirect()->route('dashboard.vendors.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $vendorProduct
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('dashboard.vendors.product.index');
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

}
