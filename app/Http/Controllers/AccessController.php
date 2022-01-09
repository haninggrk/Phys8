<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccessController extends Controller
{
    public function loginProcess(Request $request)
    {
     
        if (!Auth::attempt(['email'=>$request->email, 'password' => $request->password])) {
           
        } else {
            return redirect()->route('home');
        }
    }

    public function home(){
        return redirect()->route('home');
    }

    public function logout(){
        Auth::logout();
        return redirect(url('/'));
    }
}
