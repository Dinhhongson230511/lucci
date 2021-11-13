<?php

namespace Wave\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends \App\Http\Controllers\Controller
{
    public function index() {
        return view('themes.tailwind.lucci.contact.contact');
    }
}
