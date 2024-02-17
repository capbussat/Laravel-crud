<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $attributes = [
        'summary' => 'Summary placeholder',
        'type' => 'post',
        'status' => 'draft',
        'content'=> 'Content placeholder',
    ];
}
