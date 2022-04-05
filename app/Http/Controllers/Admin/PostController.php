<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showform() {
        return view('admin/create');
    }
    
    public function validationform(Request $request) {
        echo "<pre>";
            print_r($request->all());
        echo "</pre>";

        $messages = [
            'FoodName.required' => 'Tiêu đề bắt buộc nhập',
            'FoodName.max' => 'Tiêu đề không được vượt quá 200 ký tự',
            'FoodPrice.required' => 'Giá bắt buộc nhập',
            'FoodPrice.numeric' => 'Giá phải là số',
            'FoodCategoryName.required' => 'Loại món ăn bắt buộc nhập',
            'FoodCategoryName.max' => 'Loại món ăn không được vượt quá 50 ký tự'
            
        ];

        $this->validation($request,[
            'FoodName'=>'required|max:200',
            'FoodPrice'=>'required|numeric',
            'FoodCategoryNam'=>'required|max:50'
        ]);

        $errors = $validate->errors();
    }
}