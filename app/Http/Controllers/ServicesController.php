<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;

class ServicesController extends Controller
{
    public function index () {
        $services= Service::all();
        return view ('services.index', compact('services'));
    }

    public function show ($slug) {
        $service= Service::where('slug', '=', $slug)->first();
        
        return view ('services.show', compact('service'));
    }
}
