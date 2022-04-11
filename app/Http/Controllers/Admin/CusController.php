<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\customer;


class CusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = DB::table('customer')->select('*')->paginate(5);
        return view('admin.adminCus.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.adminCus.insert');
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

        $customer = new customer();
        $customer->CustomerFirstName = $request->first;
        $customer->CustomerLastName = $request->last;
        $customer->CustomerAddress = $request->address;
        $customer->CustomerPhoneContact = $request->phone;
        $customer->CustomerGender= $request->gender;
        $customer->CustomerDateOfBirth= $request->birth;
        $customer->CustomerEmail= $request->email;
        $customer->timestamps = false;
        $customer->save();
        return redirect()->route('customer.index')
        ->with('success','Thêm thành công khách hàng');
}
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customer = customer::where('CustomerID_PK','=',$id)->first();
        return view('admin.adminCus.edit',compact('customer'));
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
        $customer = customer::where('CustomerID_PK','=',$id)->first();
        $customer->CustomerFirstName = $request->first;
        $customer->CustomerLastName = $request->last;
        $customer->CustomerAddress = $request->address;
        $customer->CustomerPhoneContact = $request->phone;
        $customer->CustomerGender= $request->gender;
        $customer->CustomerDateOfBirth= $request->birth;
        $customer->CustomerEmail= $request->email;
        $customer->timestamps = false;
        $customer->save();
        return redirect()->route('customer.index')
        ->with('success','update thành công khách hàng');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = customer::where('CustomerID_PK','=',$id)->delete();
        return redirect()->route('customer.index')->with('success', ' khách hàng đã bị xoá');

    }
}
