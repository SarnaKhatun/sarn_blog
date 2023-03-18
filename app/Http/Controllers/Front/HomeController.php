<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function front ()
    {
        return view('front.home.home', [
            'blogs' => Blog::orderBy('id', 'DESC')->take(3)->get(),
            'services' => Service::orderBy('id', 'DESC')->get(),
        ]);
    }

    public function showBlogs ()
    {
        return view('front.blogs.blog', [
            'blogs' =>Blog::latest()->take(6)->get(),
        ]);
    }

    public function blogDetails ($id)
    {
        return view('front.blogs.details', [
            'blog' => Blog::where('id', $id)->first(),
            'blogCategories' => BlogCategory::all(),
        ]);
    }


    public function service ()
    {
        return view('front.services.service',[
            'services' => Service::latest()->get(),

        ]);
    }

    public function serviceDetails ($id)
    {
        return view('front.services.service-details', [
            'service' => Service::find($id),
            'serviceCategories' => ServiceCategory::all(),
        ]);
    }

}
