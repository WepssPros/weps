<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\ProductVendor;
use App\Models\User;
use Illuminate\Http\Request;

class ProductVendorController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit');
        $users = $request->input('users_id');
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

        $vendor = ProductVendor::with(['users','products']);

        if($name){
            $vendor->where('name', 'like', '%' . $name . '%');
        }
         if($users){
            $vendor->where('user', $users);
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
