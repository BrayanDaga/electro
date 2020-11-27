<?php

namespace App;

use App\Cart;
use App\Image;
use App\Order;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title',
        'description',
        'price',
        'stock',
        'status'
    ];

    public function orders()
    {
        return $this->morphedByMany(Order::class,'productable')->withPivot('quantity');
    }

    public function carts()
    {
        return $this->morphedByMany(Cart::class,'productable')->withPivot('quantity');
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}