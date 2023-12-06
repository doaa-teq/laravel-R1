<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Journal extends Model
{
//we use the names in the schema of tables
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'title',
        'content',
        'auther',
        'published',
        'image'
        ];
}
