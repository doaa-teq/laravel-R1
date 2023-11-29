<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable=[
        'car_name',
       'dascription',
        'price',
        'purchase'
    ];//we use the names in the schema of tables
}
