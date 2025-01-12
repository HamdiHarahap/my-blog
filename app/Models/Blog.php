<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;
    
    protected $table = 'blogs';
    protected $fillable = ['title', 'slug', 'body'];

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
