<?php

namespace Wave\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Service;
use App\Doctor;
use App\CustomerComment;

class HomeController extends \App\Http\Controllers\Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (setting('auth.dashboard_redirect', true) != "null") {
            if (!\Auth::guest()) {
                return redirect('dashboard');
            }
        }
        $services = Service::where('status', 0)->orderBy('created_at')->limit(3)->get();
        $serviceHighlight = Service::where('status', 1)->orderBy('created_at')->first();
        $doctors = Doctor::limit(6)->get();
        $listBanner = Banner::get();
        $customerComment = [];
        $customerComment = CustomerComment::get();
        $seo = [

            'title'         => setting('site.title', 'Laravel Wave'),
            'description'   => setting('site.description', 'Software as a Service Starter Kit'),
            'image'         => url('/og_image.png'),
            'type'          => 'website'

        ];

        return view('theme::home', compact('seo', 'listBanner', 'serviceHighlight', 'doctors', 'services', 'customerComment'));
    }
}
