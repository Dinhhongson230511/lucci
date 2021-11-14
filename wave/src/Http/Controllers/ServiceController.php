<?php

namespace Wave\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerComment;

class ServiceController extends \App\Http\Controllers\Controller
{
    public function index() {
        $customerComment = CustomerComment::get();
        return view('themes.tailwind.lucci.service.service', compact('customerComment'));
    }
}
