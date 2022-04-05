<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminFoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $food = DB::table('food')->select('*');
        $food = $food->get();

        $pageName = 'Danh sách món ăn';
        return view('/admin/food', compact('food', 'pageName'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/food_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $food = new food;
        $food->FoodName = $request->FoodName; 
        $food->FoodPrice = $request->FoodPrice;
        $food->FoodCategoryCode = $request->FoodCategoryCode;
        $food->Status = $request->Status;
        $food->FoodCoverPhoto = $request->FoodCoverPhoto;

        $food->save();
        return redirect()->action('Admin\AdminFoodsController@create');
    }

    /**
     * Display the specified resource.
     *
<<<<<<< HEAD
     * @param  int $id
=======
     * @param  int  $id
>>>>>>> TQuynh
     * @return \Illuminate\Http\Response
     */
    public function show($FoodCode)
    {
        $food = Food::where('FoodCode', '=', $FoodCode)->select('*')->first();
        $des = html_entity_decode($news->description);
        return view('/admin/food_detailFood', compact('food', 'des'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($FoodCode)
    {
        $food = Food::findOrFail($FoodCode);
        $pageName = 'Food - Update';
        return view('/admin/food_updateFood', compact('food', 'pageName'));
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
        $food = new food;
        $food->FoodName = $request->FoodName; 
        $food->FoodPrice = $request->FoodPrice;
        $food->FoodCategoryCode = $request->FoodCategoryCode;
        $food->Status = $request->Status;
        $food->FoodCoverPhoto = $request->FoodCoverPhoto;
        $food->save();
        return redirect()->action('Admin\AdminFoodsController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($FoodCode)
    {
        $food = Food::find($FoodCode);

        $food->delete();
        return redirect()->action('Admin\AdminFoodsController@index')->with('success','Dữ liệu xóa thành công.');
    }
}
