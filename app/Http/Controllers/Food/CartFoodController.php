<?php

namespace App\Http\Controllers\Food;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\food;
use App\Models\food_categories;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\customer;
use App\Models\orderbill;
use App\Models\order_details;
use function Ramsey\Uuid\v1;

class CartFoodController extends Controller
{
    public function CartFood($ID_Food, Request $request)
    {
        $getFood = food::where('FoodCode_PK','=',$ID_Food)->select('*');
        $getFood = $getFood->first();      
        Cart::add(['id'=>$ID_Food,'name'=>$getFood->FoodName,'price'=>$getFood->FoodPrice,'weight'=>0,'qty'=>$request->Soluong]);
        $content = Cart::content();
        $listFood = DB::table('food')->select('*');
        $listFood = $listFood->get();
        return view('pages.index', compact('listFood'));
    }
    public function GetCart()
    {
        
        $listFood = DB::table('food')->select('*');
        $listFood = $listFood->get();
        return redirect()->route('home')
        ->with('fail','Cần dăng nhập');
    }
    public function GetCartUser($getUser)
    {
        $userSelect = DB::table('users')->select('*');
        $userSelect = User::where('Username','=',$getUser)->select('*');
        $userSelect = $userSelect ->first();
        $customer = DB::table('customer')->select('*');
        $customer = customer::where('CustomerID_PK','=',$userSelect->CustomerID_FK)->select('*');
        $customer = $customer ->first();
        $content = Cart::content();
        return view('pages.deli',compact('userSelect','content','customer'));
    }
   
    public function RemoveCart($id)
    {
        $$rowId = Cart::search(array('id' => $id));
        Cart::remove($rowId[0]);
        return redirect()->route('user.index')->with('success', 'tài khoản đã bị xoá');
    }
    public function getCartSubmit(Request $request)
    {
        $orderBill = new orderbill;
        $orderBill ->UserID_FK = $request ->IDUser;
        $orderBill ->CheckStatus =0;
        $orderBill ->DatetimeReport = today();
        $sumBill =0;
        $Cart = Cart::content();
        foreach ($Cart as $value) {
            $sumBill+=$value->price*$value->qty;
        }
        $orderBill ->SumBill =$sumBill;
        $orderBill ->Note="Tên người nhận: $request->CustomerFirstName $request->CustomerLastName , Địa chỉ: $request->CustomerAddress , Số điện thoại: $request->CustomerPhoneContact , Email: $request->CustomerEmail";
        $orderBill -> save();
        foreach ($Cart as $item)
        {
            $orderBill_detail= new order_details;
            $orderBill_detail ->OrderCode_PFK = $orderBill->OrderCode_PK;
            $orderBill_detail ->FoodCode_FK = $item ->id;
            $orderBill_detail ->Qty = $item ->qty;
            $orderBill_detail ->save();
        }
        Cart::destroy();
        return redirect()->route('home')
        ->with('fail','Đặt hàng thành công, sẽ có nhân viên gọi xác nhận trong khoản thời gian ngắn sắp tới, xin cảm ơn!.');
    }
    public function getDeleteCartRowID($idFood)
    {   
        $cart = Cart::content()->where('id',$idFood);
        foreach ($cart as $key)
            {
            if($cart->isNotEmpty()){
                Cart::remove($key->rowId);
            }
        }
        return redirect()->back();
    }

}