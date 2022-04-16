<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductVendor extends Model
{
    use HasFactory; use SoftDeletes;


   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'users_id',

    ];

    public function products()
    {
        return $this->hasMany(Product::class, 'vendors_id', 'id');
    }
    public function users()
    {
        return $this->belongsTo(User::class,'users_id','id');
    }
    public function galleries()
    {
        return $this->hasMany(VendorGallery::class,'vendors_id','id');
    }

}
