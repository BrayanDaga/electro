<?php

namespace App;

use App\User;
use App\Order;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'amount',
        'payed_at',
        'order_id'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
