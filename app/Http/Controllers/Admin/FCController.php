<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\food_categories;

class FCController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fcs = DB::table('food_categories')->select('*')->paginate(10);
        
        return view('admin.adminFC.index', compact('fcs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.adminFC.insert');
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

        $fc = new food_categories();
        $fc->FoodCategoryName = $request->name;
        $fc->timestamps = false;
        $fc->save();
        return redirect()->route('foodcatergory.index')
        ->with('success','Thêm thành công thể loại thức ăn');
}
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fc = food_categories::where('FoodCategoryCode_PK','=',$id)->first();
        return view('admin.adminFC.edit',compact('fc'));
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
        $fc = food_categories::where('FoodCategoryCode_PK','=',$id)->first();
        $fc->FoodCategoryName = $request->name;
        $fc->timestamps = false;
        $fc->save();
        return redirect()->route('foodcatergory.index')
        ->with('success','update thành công thể loại thức ăn');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fc = food_categories::where('FoodCategoryCode_PK','=',$id)->delete();
        return redirect()->route('foodcatergory.index')->with('completed', ' Thể loại thức ăn đã bị xoá');

    }
}
