<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class PatnersController extends Controller
{
     public function index(Request $request){
         $productsband = Product::with('category','vendor','galleries','user')->where('categories_id' ,3)->get()->all();
         $productsfg = Product::with('category','vendor','galleries','user')->where('categories_id' ,6)->get()->all();
         $productsdekorasi = Product::with('category','vendor','galleries','user')->where('categories_id' ,2)->get()->all();
        return view('patners', [
            'productsdekorasi' => $productsdekorasi,
            'productsband' => $productsband,
            'productsfg' => $productsfg,
        ]);
    }
}
