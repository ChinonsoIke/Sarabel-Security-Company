<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Project;
use Auth;

class DashboardController extends Controller
{
    public function index() {
        $user= Auth::user();
        $projects= Project::orderBy('id','desc')->paginate(10);
        return view('users.dashboard', compact('projects', 'user'));
    }
}
