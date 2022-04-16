<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class VendorGallery extends Model
{
    use HasFactory, SoftDeletes;
    

   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'vendors_id',
        'url',
        
    ];

    public function getUrlAttribute($url)
    {
        return config('app.url') . Storage::url($url);
    }
    public function vendor()
    {
        return $this->belongsTo(ProductVendor::class,'vendors_id','id');
    }

}
