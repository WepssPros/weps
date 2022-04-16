<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\VendorGalleryRequest;
use App\Models\ProductVendor;
use App\Models\VendorGallery;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class VendorGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ProductVendor $vendor)
    {
        if (request()->ajax()) {
            $query = VendorGallery::with(['vendor'])->where('vendors_id', $vendor->id);

            return DataTables::of($query)
                ->addColumn('action', function ($item) {
                    return '
                        <form class="inline-block" action="' . route('dashboard.gallery.destroy', $item->id) . '" method="POST">
                        <button class="border border-red-500 bg-red-500 text-white rounded-md px-2 py-1 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline" >
                            Hapus
                        </button>
                            ' . method_field('delete') . csrf_field() . '
                        </form>';
                })
                ->editColumn('url', function ($item) {
                    return '<img style="max-width: 150px;" src="'. $item->url .'"/>';
                })
                ->editColumn('is_featured', function ($item) {
                    return $item->is_featured ? 'Yes' : 'No';
                })
                ->rawColumns(['action', 'url'])
                ->make();
        }

        return view('pages.admin.dashboard.galleryvendor.index', compact('vendor'));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ProductVendor $vendor)
    {
        $vendors = VendorGallery::with(['vendor']);
        return view('pages.admin.dashboard.galleryvendor.create', compact('vendor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(VendorGalleryRequest $request, ProductVendor $vendor)
    {
        $files = $request->file('files');

        if($request->hasFile('files'))
        {
            foreach ($files as $file) {
                $path = $file->store('public/gallery');

                VendorGallery::create([
                    'vendors_id' => $vendor->id,
                    'url' => $path
                ]);
            }
        }

        return redirect()->route('dashboard.vendors.gallery.index', $vendor->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VendorGallery  $vendorGallery
     * @return \Illuminate\Http\Response
     */
    public function show(VendorGallery $vendorGallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VendorGallery  $vendorGallery
     * @return \Illuminate\Http\Response
     */
    public function edit(VendorGallery $vendorGallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VendorGallery  $vendorGallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VendorGallery $vendorGallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VendorGallery  $vendorGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(VendorGallery $gallery)
    {
        $gallery->delete();

        return redirect()->route('dashboard.vendors.gallery.index', $gallery->vendors_id);
    }
}
