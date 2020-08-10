<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Picture;

class GalleryController extends Controller
{
    public function index () {
        $imgs= Picture::orderBy('id', 'desc')->get();
        return view ('gallery.index', compact('imgs'));
    }
}
