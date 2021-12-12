<?php

namespace Wave\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Service;
use App\Doctor;
use App\Appointment;
use App\Slogan;
use App\CustomerComment;
use Wave\Post;
use Session;
use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;

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
        $services = Service::where('status', 0)->orderBy('created_at')->limit(5)->get();
        $serviceHighlight = Service::where('status', 1)->orderBy('created_at')->first();
        $doctors = Doctor::limit(6)->get();
        $listBanner = Banner::get();
        $customerComment = [];
        $customerComment = CustomerComment::get();
        $posts = Post::orderBy('created_at', 'DESC')->paginate(6);
        $slogans = Slogan::orderBy('created_at', 'DESC')->paginate(6);
        $seo = [

            'title'         => setting('site.title', 'Nha khoa Lucci'),
            'description'   => setting('site.description', 'Nha khoa Lucci, Lucci dental'),
            'image'         => asset('storage/'.setting('site.seo_img')),
            'type'          => 'website'

        ];

        return view('theme::home', compact('seo','slogans', 'posts', 'listBanner', 'serviceHighlight', 'doctors', 'services', 'customerComment'));
    }

    public function create(Request $request) {
        $appointment = Appointment::create($request->all());
        Mail::to('nhakhoalucci@gmail.com')->send(new SendMail($appointment));
        Session::flash('message', 'Đặt lịch thành công!');
        return back();
    }
}
