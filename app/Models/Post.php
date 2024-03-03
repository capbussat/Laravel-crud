<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    protected $attributes = [
        'summary' => 'Summary placeholder',
        'type' => 'post',
        'status' => 'draft',
        'content'=> 'Content placeholder',
    ];

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
