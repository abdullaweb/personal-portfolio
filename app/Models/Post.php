<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    protected $casts = [
        'color' => 'array',
        'tags' => 'array',
        'published_at' => 'datetime',
    ];
}
