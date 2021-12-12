<?php

namespace Wave\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;
use App\Doctor;

class AboutController extends \App\Http\Controllers\Controller
{
    public function index()
    {
        $page = Page::where('slug', '=', 've-chung-toi')->first();
        $doctor = Doctor::get();
        $seo = [

            'title'         => 'Giới thiệu khoa Lucci',
            'description'   => 'Giới thiệu về Nha khoa Lucci, Lucci dental',
            'image'         => asset('storage/'.setting('site.seo_img')),
            'type'          => 'website'

        ];
        return view('themes.tailwind.lucci.about.about', compact('page', 'doctor', 'seo'));
    }
}
