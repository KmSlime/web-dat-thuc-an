<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $table='payment';
    protected $primaryKey = 'PaymentCode_PK';
    use HasFactory;
}
