<?php

namespace Wave\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends \App\Http\Controllers\Controller
{
    public function index() {
        return view('themes.tailwind.lucci.gallery.gallery');
    }
}
