<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function show($productID){

        $products=DB::table('products')->where('sku',$productID)->get();

        $product=$products[0];

        return view('product',['product'=>$product]);
    }

    public function getOptions(){
        $products=DB::table('products')->where('sku',1)->get();
        $product=$products[0];
        $list=explode(',',$product->options);

        return $list;

    }

    public function store(){

    }

}
