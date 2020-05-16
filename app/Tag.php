<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;


class Tag extends Model
{
    protected $fillable = [
        'title'
    ];
    public function posts(){
        return $this->belongsTo(Post::class);
    } 
}
