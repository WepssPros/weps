<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CalonvendorsRequest;
use App\Models\Calonvendor;
use Illuminate\Http\Request;

class RegistrationVendorController extends Controller
{
    public function index(Request $request){
        return view('registervendor');
    }

     public function store(CalonvendorsRequest $request)
    {
        $data = $request->all();

        Calonvendor::create($data);

        return redirect()->route('dashboard.calonvendor.index');
    }
}
