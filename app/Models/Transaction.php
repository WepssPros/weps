<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory; use SoftDeletes;

 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'users_id',
        'vendors_id',
        'name_acara',
        'tgl_acara',
        'address',
        'deposito',
        'total_price',
        'shipping_price',
        'status',
        'payment',

    ];


    public function user(){

        return $this->belongsTo(User::class, 'users_id', 'id');

    }


    public function items() {
        return $this->hasMany(TransactionItem::class,'transactions_id','id');
    }
}