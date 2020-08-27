<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct () {
        $this->middleware('guest:admin', ['except'=>['logout']]);
    }

    public function showLoginForm() {
        return view ('admin.auth.admin_login');
    }

    public function login (Request $request) {
        //validate form data
        $this->validate($request, [
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);

        //attempt to log user in
        if (Auth::guard('admin')->attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember)) {
            //if login successful redirect user to intended location
            return redirect()->intended(route('backend'));
        }

        //if unsuccessful redirect back to login with form data
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect('/');
    }

}
