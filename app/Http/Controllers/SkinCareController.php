<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SkinCareController extends Controller
{
    //
    public function index(){
        //
        try {
            $skincares=DB::table('products')->where('category','skin-care')->get();
            return view('skin-care')->with('skincares', $skincares);
            // Closures include ->first(), ->get(), ->pluck(), etc.
        } catch(\Illuminate\Database\QueryException $ex){
            dd($ex->getMessage());
            // Note any method of class PDOException can be called on $ex.
        }

    }
}
