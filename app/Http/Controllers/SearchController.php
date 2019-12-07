<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    //
   public function show($search){


       $products=DB::table('products')->where('name', 'ILIKE', '%' . $search . '%')->get();


       return view('search')->with('products', $products);
   }

   public function index(){

       $search = request('search');

       $products=DB::table('products')->where('name', 'ILIKE', '%' . $search . '%')->get();

       return view('search')->with('products', $products);

   }
    public function store(){


    }
}
