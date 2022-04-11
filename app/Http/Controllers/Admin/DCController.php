<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\drink_categories;

class DCController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dcs = DB::table('drink_categories')->select('*')->paginate(10);
        return view('admin.adminDC.index', compact('dcs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.adminDC.insert');
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
            'name' => 'required|max:255'
        ]);

        $dc = new drink_categories();
        $dc->DrinkCategoryName = $request->name;
        $dc->Note = $request->note;
        $dc->timestamps = false;
        $dc->save();
        return redirect()->route('drinkcategory.index')
        ->with('success','Thêm thành công thể loại thức uống');
}
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dc = drink_categories::where('DrinkCategoryCode_PK','=',$id)->first();
        return view('admin.adminDC.edit',compact('dc'));
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
            'name' => 'required|max:255'
        ]);
        $dc = drink_categories::where('DrinkCategoryCode_PK','=',$id)->first();
        $dc->DrinkCategoryName = $request->name;
        $dc->timestamps = false;
        $dc->save();
        return redirect()->route('drinkcategory.index')
        ->with('success','update thành công thể loại thức uống');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dc = drink_categories::where('DrinkCategoryCode_PK','=',$id)->delete();
        return redirect()->route('drinkcategory.index')->with('success', ' Thể loại thức uống đã bị xoá');

    }
}
