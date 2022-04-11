<?php

namespace App\Http\Controllers\Food;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Food\CartFoodController;
use Illuminate\Support\Facades\DB;
use App\Models\food;
use App\Models\food_categories;
class FoodDetailController extends Controller
{
    public function getFood()
    {
        return view('pages.food');
    }
    public function getFoodID($ID_Food)
    {
        
        $listFood = food::where('FoodCode_PK','=',$ID_Food)->select('*');
        $listFood = $listFood->first();
        $category = food_categories::where('FoodCategoryCode_PK','=',$listFood->FoodCategoryCode_PFK)->select('*');
        $category = $category->first();
        return view('pages.food', compact('listFood','category'));
    }
}
