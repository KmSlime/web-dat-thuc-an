<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\food;
use App\Models\food_categories;

class DrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drinks = DB::table('drinks')->select('*')->paginate(10);
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
        return view('/admin/drink_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $drinks = new drink;
        $food->FoodName = $request->FoodName; 
        $food->FoodPrice = $request->FoodPrice;
        $food->FoodCategoryCode = $request->FoodCategoryCode;
        $food->Status = $request->Status;
        $food->FoodCoverPhoto = $request->FoodCoverPhoto;

        $food->save();
        return redirect()->action('Admin\DrinkController@create');

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($FoodCode)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $FoodCode)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($FoodCode)
    {
       
    }
}
