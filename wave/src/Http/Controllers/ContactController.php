<?php

namespace Wave\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends \App\Http\Controllers\Controller
{
    public function index() {
        $seo = [

            'title'         => 'Liên hệ',
            'description'   => 'Liên hệ',
            'image'         => asset('storage/'.setting('site.seo_img')),
            'type'          => 'website'

        ];
        return view('themes.tailwind.lucci.contact.contact', compact('seo'));
    }
}
