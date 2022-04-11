<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orderbill extends Model
{
    protected $table='orderbill';
    protected $primaryKey = 'OrderCode_PK';
    use HasFactory;
}
