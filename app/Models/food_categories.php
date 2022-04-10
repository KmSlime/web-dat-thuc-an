<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class food_categories extends Model
{
    protected $table='food_categories';
    protected $primaryKey = 'FoodCategoryCode_PK';
    use HasFactory;
}
