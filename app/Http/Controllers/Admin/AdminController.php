<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.admin.login');
    }
    public function login_check(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|between,3,6|regex:/^[a-zA-Z1-9\x{2e80}-\x{9FFF}]*$/u',
            'password'=>'required|between,5,12',
            'captcha'=>'required|size:4|captcha'
        ]);
    }
}
