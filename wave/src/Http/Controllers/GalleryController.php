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
        $seo = [

            'title'         => 'Thư viện ảnh của khoa Lucci',
            'description'   => 'Thư viện ảnh Nha khoa Lucci, Lucci dental',
            'image'         => asset('storage/'.setting('site.seo_img')),
            'type'          => 'website'

        ];
        return view('themes.tailwind.lucci.gallery.gallery', compact('gallery', 'seo'));
    }
}
