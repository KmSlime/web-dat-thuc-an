<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\users;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /** tài khoản khách hàng */
        $users = DB::table('users')->select('*')->orderBy('PermissionID_PFK')->paginate(5);
        $pss = DB::table('permission')->select('*')->get();
        return view('admin.adminUser.index', compact('users','pss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pss = DB::table('permission')->select('*')->get();
        return view('admin.adminUser.insert', compact('pss'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|max:255',
            'password' => 'required|max:255',
            'permission' => 'required',        
    ]);

        $user = new users();
        $user->Username = $request->username;
        $user->Password = $request->password;
        $user->PermissionID_PFK = $request->permission;
        $user->timestamps = false;
        $user->save();
        return redirect()->route('user.index')
        ->with('success','Thêm thành công tài khoản');
}
    


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = users::where('UserID_PK','=',$id)->first();      
        $pss = DB::table('permission')->where('PermissionID_PK','<>',$user->PermissionID_PFK)->select('*')->get();
        $ps = DB::table('permission')->where('PermissionID_PK','=',$user->PermissionID_PFK)->select('*')->first();
        return view('admin.adminUser.edit',compact('user','ps','pss'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|max:255',
            'password' => 'required|max:255',
            'permission' => 'required',          
    ]);
        $user = users::where('UserID_PK','=',$id)->first();
        $user->Username = $request->username;
        $user->Password = $request->password;
        $user->PermissionID_PFK = $request->permission;
        $user->timestamps = false;
        $user->save();
        return redirect()->route('user.index')
        ->with('success','update thành công tài khoản');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = users::where('UserID_PK','=',$id)->delete();
        return redirect()->route('user.index')->with('success', 'tài khoản đã bị xoá');
    }
}
