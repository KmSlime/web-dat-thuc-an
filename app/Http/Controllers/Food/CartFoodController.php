<?php

namespace App\Http\Controllers\Food;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\food;
use App\Models\food_categories;
use Gloudemans\Shoppingcart\Facades\Cart;

use function Ramsey\Uuid\v1;

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
        foreach ($content as $key)
        {
            $sz = $key -> id;
        }
        return dd($sz);
        return view('pages.index', compact('listFood'));
    }
    public function GetCart()
    {
        $content = Cart::content();
        return view('pages.deli',compact('content'));
    }
}