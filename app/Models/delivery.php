<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class delivery extends Model
{
    protected $table='delivery';
    protected $primaryKey = 'DeliveryCode_PK';
    use HasFactory;
}
