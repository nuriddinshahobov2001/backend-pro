<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\LoginRequest;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function login(){
        return view('admin.auth.login');
    }

    public function doLogin(LoginRequest $request){
        $data = $request->validated();
        dd($data);
    }
}
