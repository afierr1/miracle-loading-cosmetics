<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AdminForms extends Controller
{

    public function index() {
        $forms=DB::table('contact_forms')->orderBy('created_at')->take(3)->get();

        return view('admin.forms')->with('forms', $forms);





    }

}
