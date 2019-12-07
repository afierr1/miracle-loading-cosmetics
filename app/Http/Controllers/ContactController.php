<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactForm;

class ContactController extends Controller
{
    //
public function create() {
    //
    return view('contact');
}

public function store(){

    request()->validate([
        'name' => 'required',
        'email' => 'required',
        'message' => 'required'
    ]);

    $contactForm = new ContactForm();

    $contactForm->name = request('name');
    $contactForm->email = request('email');
    $contactForm->message = request('message');

    $contactForm->save();

    return redirect('/contact');

}

public function search(){
    $search = request('search');
}
}
