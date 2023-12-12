<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Entry extends Model
{   protected $table = 'informations'; 
    use HasFactory,SoftDeletes;
       protected $fillable = [
        'title',
        'describtion',
        'image',
        'from_price',
        'to_price'
    ];
}
