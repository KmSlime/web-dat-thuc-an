<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    protected $table='staff';
    protected $primaryKey = 'StaffID_PK';
    use HasFactory;
}
