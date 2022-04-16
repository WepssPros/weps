<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class CalonvendorsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'users_id' => 'required|integer',
            'name_vendor' => 'required|max:255',
            'provinsi_vendor' => 'required|max:255',
            'kota_vendor' => 'required|max:255',
            'alamat_vendor' => 'required|max:255',
            'umur_vendor' => 'required|max:255',
            'total_acara' => 'required|max:255',
            'kategori_vendor' => 'required|max:255',
            'status' => 'in:PENDING,APPROVED,NOT-APPROVED',
        ];
    }
}
