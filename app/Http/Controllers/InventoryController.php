<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class InventoryController extends Controller
{
    //
    public function index(){
        //
        $products=Product::all();
        return view('admin.inventory')->with('products', $products);
    }
}
