<?php

namespace App\Http\Controllers\Food;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\food;
use App\Models\food_categories;
use Gloudemans\Shoppingcart\Facades\Cart;
class CartFoodController extends Controller
{
    public function CartFood($ID_Food)
    {
        $getFood = food::where('FoodCode_PK','=',$ID_Food)->select('*');
        $getFood = $getFood->first();      
        Cart::add(['id'=>$ID_Food,'name'=>$getFood->FoodName,'price'=>$getFood->FoodPrice,'weight'=>0,'qty'=>1]);
        $content = Cart::content();
        $listFood = DB::table('food')->select('*');
        $listFood = $listFood->get();
        if($ID_Food == 4)
        return view('pages.index', compact('listFood','content'));
    }
}