<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Calonvendor extends Model
{
    use HasFactory; use SoftDeletes;

 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'users_id',
        'name_vendor',
        'provinsi_vendor',
        'kota_vendor',
        'alamat_vendor',
        'umur_vendor',
        'total_acara',
        'kategori_vendor',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'users_id', 'id');
    }
}
