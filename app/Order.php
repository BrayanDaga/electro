<?php

namespace App;

use App\User;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
        'status',
        'customer_id',
    ];

    public function products()
    {
        return $this->morphToMany(Product::class,'productable')->wherePivot('quantity');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
