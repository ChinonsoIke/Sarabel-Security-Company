<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientelleController extends Controller
{
    public function index () {
        $clients= Client::orderBy('id', 'desc')->get();
        return view ('clientelle.index', compact('clients'));
    }
}
