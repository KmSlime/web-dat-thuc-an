<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table='customer';
    protected $primaryKey = 'CustomerID_PK';
    use HasFactory;
}
