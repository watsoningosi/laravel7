<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function show()
    {
        return view('contact');
    }

    public function store()
    {
        Request()->validate(['email' => 'required|email']);

        $email = request('email');

        dd($email);
    }
}
