<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AllFormsController extends Controller
{
    //
    public function index(){
        $forms=DB::table('contact_forms')->orderBy('created_at')->get();

        return view('admin.all-forms')->with('forms', $forms);
    }
}
