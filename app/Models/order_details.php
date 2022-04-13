<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_details extends Model
{
    public $timestamps = FALSE;
    protected $table='order_details';
    protected $primaryKey = 'OrderDetailsCode_PK';
    use HasFactory;
}
