<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\staff;


class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = DB::table('staff')->select('*')->paginate(5);
        return view('admin.adminStaff.index', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.adminStaff.insert');
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
            'first' => 'required|max:255',
            'last' => 'required|max:255',
            'address' => 'required|max:255',
            'phone' => 'required|max:255',
            'gender' => 'required|max:255',
            'email' => 'required',
    ]);

        $staff = new staff();
        $staff->StaffFirstName = $request->first;
        $staff->StaffLastName = $request->last;
        $staff->StaffAddress = $request->address;
        $staff->StaffPhoneContact = $request->phone;
        $staff->StaffGender= $request->gender;
        $staff->StaffDateOfBirth= $request->birth;
        $staff->StaffEmail= $request->email;
        $staff->timestamps = false;
        $staff->save();
        return redirect()->route('staff.index')
        ->with('success','Thêm thành công nhân viên');
}
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $staff = staff::where('StaffID_PK','=',$id)->first();
        return view('admin.adminStaff.edit',compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *d
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'first' => 'required|max:255',
            'last' => 'required|max:255',
            'address' => 'required|max:255',
            'phone' => 'required|max:255',
            'gender' => 'required|max:255',
            'email' => 'required',
    ]);
        $staff = staff::where('StaffID_PK','=',$id)->first();
        $staff->StaffFirstName = $request->first;
        $staff->StaffLastName = $request->last;
        $staff->StaffAddress = $request->address;
        $staff->StaffPhoneContact = $request->phone;
        $staff->StaffGender= $request->gender;
        $staff->StaffDateOfBirth= $request->birth;
        $staff->StaffEmail= $request->email;
        $staff->timestamps = false;
        $staff->save();
        return redirect()->route('staff.index')
        ->with('success','update thành công nhân viên');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $staff = staff::where('StaffID_PK','=',$id)->delete();
        return redirect()->route('staff.index')->with('success', ' nhân viên đã bị xoá');

    }
}
