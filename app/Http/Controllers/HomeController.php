<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        //
        $products=Product::all();
        return view('home')->with('products', $products);
    }
    public function show() {
        //
    }

    public function create() {
        //
    }

    public function store() {
        //
    }
}
