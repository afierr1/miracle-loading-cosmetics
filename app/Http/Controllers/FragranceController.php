<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FragranceController extends Controller
{
    //
    public function index(){
        //
        try {
            $fragrances=DB::table('products')->where('category','perfume')->get();
            return view('fragrance')->with('fragrances', $fragrances);
            // Closures include ->first(), ->get(), ->pluck(), etc.
        } catch(\Illuminate\Database\QueryException $ex){
            dd($ex->getMessage());
            // Note any method of class PDOException can be called on $ex.
        }

    }


}
