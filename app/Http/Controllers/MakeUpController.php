<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MakeUpController extends Controller
{
    //
    public function index(){
        //
        try {
            $makeups=DB::table('products')->where('category','make-up')->get();
            return view('make-up')->with('makeups', $makeups);
            // Closures include ->first(), ->get(), ->pluck(), etc.
        } catch(\Illuminate\Database\QueryException $ex){
            dd($ex->getMessage());
            // Note any method of class PDOException can be called on $ex.
        }

    }
}
