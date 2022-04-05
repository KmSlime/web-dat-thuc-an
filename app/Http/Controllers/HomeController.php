<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Models\food;
class HomeController extends Controller
{
    public function getHome()
    {
        $listFood = DB::table('food')->select('*');
        $listFood = $listFood ->get();
        return view('pages.index',compact('listFood'));
    }
    public function getMenu($idcatergory)
    {   
        $catergory = DB::table('food_categories')->select('*');
        $catergory = $catergory ->get();
        $food = DB::table('food')->select('*');
        $food = food::where('FoodCategoryCode_PFK','=',$idcatergory)->select('*');
        $food = $food ->get();
        return view('pages.catergory',compact('catergory','food'));
    }
    public function getAll()
    {
        $catergory = DB::table('food_categories')->select('*');
        $catergory = $catergory ->get();
        $food = DB::table('food')->select('*');
        $food = $food ->get();
        
        // $des = html_entity_decode($news->description);
        return view('pages.catergory',compact('catergory','food'));
    }
    public function postLogin(Request $request)
    {
        $listFood = DB::table('food')->select('*');
        $listFood = $listFood ->get();
        $arr = [
            'email' => $request ->email,
            'password' =>$request ->password,
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
                    return view('layouts.master-admin',compact('listFood','loginuser'));
                }
                else 
                {
                    return view('pages.index',compact('listFood','loginuser'));
                }
            }
        }
        else 
        {
            return dd('no');
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
