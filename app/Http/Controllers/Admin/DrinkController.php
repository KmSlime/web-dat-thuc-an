<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\drinks;
use App\Models\drink_categories;

class DrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drinks = DB::table('drinks')->select('*')->paginate(5);
        $dcs = DB::table('drink_categories')->select('*')->get();
        return view('admin/adminDrink/index', compact('drinks','dcs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $dcs = DB::table('drink_categories')->select('*')->get();
        return view('admin.adminDrink.insert',compact('dcs'));
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
            'name' => 'required|max:255',
            'price' => 'required',
            'category' => 'required',
            'image' => 'required',
            'status' => 'required'

        ]);    
        $drink = new drinks();
        $drink->DrinkName = $request->name;
        $drink->DrinkPrice = $request->price;
        $drink->DrinkCategoryCode_PFK   = $request->category;
        $drink->DrinkCoverPhoto = $request->image;
        $drink->status = $request->status;
        $drink->timestamps = false;
        $drink->save();
        return redirect()->route('drink.index')
        ->with('success','Thêm thành công thức uống');
}
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $drink = drinks::where('DrinkCode_PK','=',$id)->first();
        $dc = drink_categories::where('DrinkCategoryCode_PK','=',$drink->DrinkCategoryCode_PFK)->first();
        $dcs = drink_categories::where('DrinkCategoryCode_PK','<>',$drink->DrinkCategoryCode_PFK)->get();
        return view('admin.adminDrink.edit',compact('drink','dc','dcs'));
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
            'name' => 'required|max:255',
            'price' => 'required',
            'category' => 'required',
            'image' => 'required',
            'status' => 'required'

        ]);    
        $drink = drinks::where('DrinkCode_PK','=',$id)->first();
        $drink->DrinkName = $request->name;
        $drink->DrinkPrice = $request->price;
        $drink->DrinkCategoryCode_PFK   = $request->category;
        $drink->DrinkCoverPhoto = $request->image;
        $drink->status = $request->status;
        $drink->timestamps = false;
        $drink->save();
        return redirect()->route('drink.index')
        ->with('success','update thành công thức uổng');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $drink = drinks::where('DrinkCode_PK','=',$id)->delete();
        return redirect()->route('drink.index')->with('success', 'thức uống đã bị xoá');

    }
}
