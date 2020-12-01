<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function __invoke()
    {
        $products = Product::available()->paginate();
        return view('welcome',compact('products'));

    }
}
