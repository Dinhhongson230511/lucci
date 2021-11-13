<?php

namespace Wave\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;

class GalleryController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        $gallery = [];
        $gallery = Gallery::get();
        return view('themes.tailwind.lucci.gallery.gallery', compact('gallery'));
    }
}
