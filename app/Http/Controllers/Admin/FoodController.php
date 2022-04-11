<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\food;
use App\Models\food_categories;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = DB::table('food')->select('*')->paginate(5);
        $fcs = DB::table('food_categories')->select('*')->get();
        return view('admin.adminFood.index', compact('foods','fcs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $fcs = DB::table('food_categories')->select('*')->get();
        return view('admin.adminFood.insert',compact('fcs'));
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
        $food = new food();
        $food->FoodName = $request->name;
        $food->FoodPrice = $request->price;
        $food->FoodCategoryCode_PFK  = $request->category;
        $food->FoodCoverPhoto = $request->image;
        $food->status = $request->status;
        $food->timestamps = false;
        $food->save();
        return redirect()->route('food.index')
        ->with('success','Thêm thành công thức ăn');
}
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $food = food::where('FoodCode_PK','=',$id)->first();
        $fc = food_categories::where('FoodCategoryCode_PK','=',$food->FoodCategoryCode_PFK)->first();
        $fcs = food_categories::where('FoodCategoryCode_PK','<>',$food->FoodCategoryCode_PFK)->get();
        return view('admin.adminFood.edit',compact('food','fc','fcs'));
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
        $food = food::where('FoodCode_PK','=',$id)->first();
        $food->FoodName = $request->name;
        $food->FoodPrice = $request->price;
        $food->FoodCategoryCode_PFK  = $request->category;
        $food->FoodCoverPhoto = $request->image;
        $food->status = $request->status;
        $food->timestamps = false;
        $food->save();
        return redirect()->route('food.index')
        ->with('success','update thành công  thức ăn');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $food = food::where('FoodCode_PK','=',$id)->delete();
        return redirect()->route('food.index')->with('success', 'thức ăn đã bị xoá');

    }
}
