<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;


class Video extends Model
{
    protected $fillable = [
        'title', 'url', 'post_id'];

        public function post(){
            return $this->belongsTo(Post::class);
        } 
}
