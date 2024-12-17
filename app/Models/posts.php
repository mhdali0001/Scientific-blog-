<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    protected $fillable = ['title','category','description'];
    /** @use HasFactory<\Database\Factories\PostsFactory> */
    use HasFactory;
}
