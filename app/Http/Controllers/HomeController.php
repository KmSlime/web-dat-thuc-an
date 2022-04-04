<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use DB,Datetime,Session,File;
class HomeController extends Controller
{
    public function getHome()
    {
        return view('pages.index');
    }
    public function postLogin(Request $request)
    {

        $arr = [
            'email' => $request ->email,
            'password' =>$request ->password,
        ];
        $asx = Auth::user('email');
        if (Auth::attempt($arr))
        {
           dd("Đăng nhập thành công");
        }
        else 
        {
            $a= $arr['email'];
            $b=$arr['password'];
            dd("Đăng nhập thất bại $a $b $asx");
        }
    }
}
