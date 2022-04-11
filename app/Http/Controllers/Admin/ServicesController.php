<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\services;


class ServicesController extends Controller
{

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = DB::table('services')->select('*')->get();
        return view('admin.adminServices.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service = DB::table('services')->select('*')->get();
        return view('admin.adminServices.insert',compact('service'));
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
            'Note' => 'required|max:255',
            'Fee' => 'required'
        ]);    
        $service = new services();
        $service->Note = $request->Note;
        $service->Fee = $request->Fee;
        $service->save();
        return redirect()->route('services.index')
        ->with('success','Thêm thành công dịch vụ');
}
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Services::where('serviceCode_PK','=',$id)->first();
        return view('admin.adminServices.edit',compact('service'));

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

        // $service = new services();
        $request->validate([
            'Note' => 'required|max:255',
            'Fee' => 'required'
        ]);    

        $service = Services::where('ServiceCode_PK','=',$id)->first();
        $service->Note = $request->Note;
        $service->Fee = $request->Fee;
        $service->save();
        return redirect()->route('services.index')
        ->with('success','Update thành công dịch vụ');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Services::where('serviceCode_PK','=',$id)->delete();
        return redirect()->route('services.index')->with('success', 'Dịch vụ đã bị xoá');
    }

}
