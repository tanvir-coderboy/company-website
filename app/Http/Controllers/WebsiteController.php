<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Blog;
use App\Models\SectionTitle;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Testimonial;
use App\Models\Welcome;
use App\Models\WhyChoose;

class WebsiteController extends Controller
{
    public function home()
    {
        $setting = Setting::first();
        $banner = Banner::where('status',1)->first();
        $welcome = Welcome::where('status',1)->first();
        $title = SectionTitle::first();
        $services = Service::with('serviceItems')->where('status',1)->get();
        $whychooses = WhyChoose::where('status',1)->get();
        $blogs = Blog::where('status',1)->get();
        $testimonials = Testimonial::where('status',1)->get();
        return view('frontend.index', compact('setting','banner','welcome','title','services','whychooses','blogs','testimonials'));
    }

    public function contact()
    {
        return 'Contact';
    }


}
