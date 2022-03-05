<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnArgument;

class loginController extends Controller
{
    public function login()
    {
       return view("login");
    }

    public function check(Request $request)
    {
        $request->validate([
           'email'=>'required|email',
           'password'=>'required|min:6',
        ]);

        $userinfo=User::where('email','=',$request->email)->first();
        if (!$userinfo) {
            return back()->with('fail','email dose not exist');
        }else {
            if ($request->password==$userinfo->password) {
                $request->session()->put('loggeduser',$userinfo);
                return redirect('dashboard');
            }else {
                return back()->with('fail','Password in incorect');

            }
        }
    }

}
