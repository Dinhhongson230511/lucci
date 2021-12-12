<?php

namespace Wave\Http\Controllers;

use Illuminate\Http\Request;
use App\CustomerComment;

class ServiceController extends \App\Http\Controllers\Controller
{
    public function index() {
        $customerComment = CustomerComment::get();
        $seo = [

            'title'         => 'Dịch vụ của Nha khoa Lucci',
            'description'   => 'Những dịch vụ của Nha khoa Lucci, Lucci dental',
            'image'         => asset('storage/'.setting('site.seo_img')),
            'type'          => 'website'

        ];
        return view('themes.tailwind.lucci.service.service', compact('customerComment', 'seo'));
    }
}
