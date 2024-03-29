<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   public function user()
   {
      return $this->belongsTo(User::class);
   }
   use HasFactory;

   public function categories()
   {
      return $this->belongsToMany(Category::class);
   }

   public function comments()
   {
      return $this->hasMany(Comment::class);
   }
}
