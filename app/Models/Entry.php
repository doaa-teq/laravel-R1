<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    use HasFactory;
    protected $table = 'informations'; 
    protected $fillable = [
        'title',
        'describtion',
        'image',
        'from_price',
        'to_price'
        ];
}
