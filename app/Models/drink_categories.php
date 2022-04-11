<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class drink_categories extends Model
{
    protected $table='drink_categories';
    protected $primaryKey = 'DrinkCategoryCode_PK';
    use HasFactory;
}
