<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Comment;
class Product extends Model
{
    use HasFactory;
    public function categories(){
        return $this->belongsTo(Category::class);        
    }
    public function relatedComments(){
        return $this->hasMany(Comment::class);
    }
}
