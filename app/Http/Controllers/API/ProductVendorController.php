<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\ProductVendor;
use Illuminate\Http\Request;

class ProductVendorController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit');
        $name = $request->input('name');

        $show_vendor = $request->input('show_vendor');

        if($id)
        {
            $vendor = ProductVendor::with(['products','users'])->find($id);

            if($vendor) {
                return ResponseFormatter::success(
                    $vendor,
                    'Data Vendor Berhasil Di Ambil'
                );
            }
            else {
                return ResponseFormatter::success(
                    null,
                    'Data Vendor Tidak ada',
                    404
                );
            }
        }

        $vendor = ProductVendor::query();

        if($name){
            $vendor->where('name', 'like', '%' . $name . '%');
        }

        if($show_vendor) {
            $vendor->with('products','users');
        }
        return ResponseFormatter::success(
            $vendor->paginate($limit),
            'Data Kategori Berhasil Di Ambil'
        );

    }
}
