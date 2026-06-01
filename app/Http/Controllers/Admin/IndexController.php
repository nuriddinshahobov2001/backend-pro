<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function login(){
        return view('admin.auth.login');
    }

    public function doLogin(LoginRequest $request){
        $data = $request->validated();
        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard.index');
        }
        return back()->withErrors([
            'email' => 'Логин или пароль неверно.',
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
