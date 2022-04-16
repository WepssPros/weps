<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory; use SoftDeletes;

 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'price',
        'description',
        'tags',
        'users_id',
        'categories_id',
        'vendors_id',

    ];


    public function galleries()
    {
        return $this->hasMany(ProductGallery::class,'products_id','id');
    }

    public function category()
    {
        return $this->belongsTo(ProductCategory::class,'categories_id','id');
    }
    public function vendor()
    {
        return $this->belongsTo(ProductVendor::class,'vendors_id','id');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'users_id','id');
    }



}
