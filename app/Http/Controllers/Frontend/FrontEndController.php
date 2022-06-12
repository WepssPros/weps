<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(Request $request){

          $productsmc = Product::with('category','vendor','galleries','user')->where('categories_id' ,10)->get()->all();
          $productswo = Product::with('category','vendor','galleries','user')->where('categories_id' ,9)->get()->all();
          $productsdekorasi = Product::with('category','vendor','galleries','user')->where('categories_id' ,2)->get()->all();
        return view('welcome', [
            'productsmc' => $productsmc,
            'productswo' => $productswo,
            'productsdekorasi' => $productsdekorasi,
        ]);
    }
}
