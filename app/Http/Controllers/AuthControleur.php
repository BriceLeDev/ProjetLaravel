<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthControleur extends Controller
{
    public function login (){
        return view('auth.login');

    }
    public function Dologin(AuthRequest $request){
        $credential= $request->validated();
        if ((Auth::attempt($credential))){
            $request->session()->regenerate();
            return redirect()->intended(route('client'));
        }
        return to_route('auth.login')->withErrors([
            'email'=>'Email invalide'
        ])->onlyInput('email');
    }
}
