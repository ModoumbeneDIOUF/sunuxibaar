<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Post;

class Comment extends Model
{
    protected $fillable = [
        'content', 'author_id','category_id'];

        public function author(){
            return $this->belongsTo(User::class,'author_id','id');
        }

        public function post(){
            return $this->belongsTo(Post::class);
        } 
}
