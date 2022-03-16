<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    function index(){
       $products = Product::all();
        return view('home',compact('products'));
    }
}
