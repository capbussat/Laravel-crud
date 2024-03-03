<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    protected $attributes = [
        'title' => 'Escriu un títol',
        'type' => 'post',
        'status' => 'draft',
        'content'=> 'Escriu el contingut.',
    ];

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
