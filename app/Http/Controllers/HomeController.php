<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Models\food;
use App\Models\customer;

class HomeController extends Controller
{
    public function getHome()
    {
        $listFood = DB::table('food')->select('*');
        $listFood = $listFood->get();
        return view('pages.index', compact('listFood'));
    }
    public function getLogout()
    {
        $listFood = DB::table('food')->select('*');
        $listFood = $listFood ->get();
        $enLogout = true;
        return view('pages.index',compact('listFood','enLogout'));
    }
    public function getMenu($idcatergory)
    {
        $catergory = DB::table('food_categories')->select('*');
        $catergory = $catergory->get();
        $food = DB::table('food')->select('*');
        $food = food::where('FoodCategoryCode_PFK', '=', $idcatergory)->select('*');
        $food = $food->get();
        return view('pages.catergory', compact('catergory', 'food'));
    }

    public function getAll()
    {
        $catergory = DB::table('food_categories')->select('*');
        $catergory = $catergory->get();
        $food = DB::table('food')->select('*');
        $food = $food->get();

        // $des = html_entity_decode($news->description);
        return view('pages.catergory', compact('catergory', 'food'));
    }
    public function getUser($getUser) {
        $userSelect = DB::table('users')->select('*');
        $userSelect = User::where('Username','=',$getUser)->select('*');
        $userSelect = $userSelect ->first();
        $customer = DB::table('customer')->select('*');
        $customer = customer::where('CustomerID_PK','=',$userSelect->CustomerID_FK)->select('*');
        $customer = $customer ->first();
        return view('pages.user', compact('userSelect', 'customer'));
        }
        public function postLogin(Request $request)
        {   
            $listFood = DB::table('food')->select('*');
            $listFood = $listFood ->get();
            $arr = [
                'email' => $request->email,
                'password' => $request->password,
            ];
            $loginuser = DB::table('users')->select('*');
            $loginuser = User::where('Username','=',$arr['email'])->where('Password','=',$arr['password'])->select('*');
            $loginuser = $loginuser->get();
            if(($loginuser->count())>0)
            {
                foreach($loginuser as $key)
                {
                    if(($key->PermissionID_PFK)==1)
                    {
                        echo '<script language="javascript">alert("Đăng nhập thành công quyền quản trị Admin!, chuyển đến trang quản trị dành cho admin.");</script>';
                        return view('pages.index',compact('listFood','loginuser'));
                    }
                    else 
                    {
                        echo '<script language="javascript">alert("Đăng nhập thành công!");</script>';
                        return view('pages.index',compact('listFood','loginuser'));
                    }
                }
            }
            else 
            {
                return redirect()->route('home') ->with('fail','đăng nhập thất bại');
            }
        }
    function getRegister()
    {
        return view('pages.index');
    }
    public function postRegister(Request $request)
    {   
        $this -> validate($request,[
            'Username' => 'required|unique:users,Username',
            //'Password' => 'required|min:3|max:32'
        ],[
            'Username.required' => 'B?n chua nh?p Username ho?c email',
            'Username.unique' => 'Username ho?c email dã t?n t?i',
            'Password.required' => 'B?n chua nh?p m?t kh?u',
            'Password.min' => 'M?t kh?u c?n ít nh?t 3 ký t?',
            'Password.max' => 'M?t kh?u t?i da 32 ký t?'

        ]);
        $user = new User;
        $user ->Username = $request ->Username;
        $user ->Password = $request ->Password;
        $user ->Password = bcrypt($request ->Password);
        $user ->PermissionID_PFK=4;
        $user ->LoyaltyPoint=0;
        $user ->Avatar="NULL";
        $user ->save();
        $listFood = DB::table('food')->select('*');
        $listFood = $listFood ->get();
        echo '<script language="javascript">alert("Ðăng ký thành công!");</script>';
        return view('pages.index',compact('listFood'));
    }
}
