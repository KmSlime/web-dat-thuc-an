<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
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
    function getRegister()
    {
        return view('pages.index');
    }
    public function postRegister(Request $request)
    {
        $this -> validate($request,[
            'email' => 'required|unique:users,email',
            'password' => 'required|min:3|max:32'
        ],[
            'emai.required' => 'Bạn chưa nhập username hoặc email',
            'emai.unique' => 'username hoặc email đã tồn tại',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu cần ít nhất 3 ký tự',
            'password.max' => 'Mật khẩu tối đa 32 ký tự'

        ]);
        $user = new User;
        $user ->email = $request ->email;
        $user ->password = $request ->password;
        $user ->password = bcrypt($request ->password);
        $user ->PermissionID=4;
        $user ->CustomerID=0;
        $user ->staffID=0;
        $user ->LoyaltyPoint=0;
        $user ->Avatar="NULL";
        $user ->save();
        return view('pages.index')->with('thongbao','Đăng ký thành công');
    }
}
