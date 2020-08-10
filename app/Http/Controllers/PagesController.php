<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Post;
use App\Picture;

class PagesController extends Controller
{
    public function index () {
        $services= Service::orderBy('id', 'desc')->limit(3)->get();
        $posts= Post::orderBy('id', 'asc')->limit(4)->get();
        $imgs= Picture::orderBy('id', 'asc')->limit(6)->get();
        return view ('pages.index', compact('services', 'posts', 'imgs'));
    }

    public function contact () {
        return view ('pages.contact');
    }

    public function about () {
        return view ('pages.about');
    }
}
