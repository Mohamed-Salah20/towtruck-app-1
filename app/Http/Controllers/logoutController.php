<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logoutController extends Controller
{
    public function logout()
    {
        if (session()->has('loggeduser')) {
            session()->pull('loggeduser');
            return redirect('/');
        }
    }
}
