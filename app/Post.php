<?php

namespace App;
use App\User;
use App\Category;
use App\Image;
use App\Video;
use App\Tag;
use App\Comment;


use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'content','post_type', 'author_id','category_id','meta_data'];

        public function author(){
            return $this->belongsTo(User::class,'author_id','id');
        } 
        // pour la category on a pas besoin de préciser l'id laravel va comprendre que c pour categorie car on category_id
        public function category(){
            return $this->belongsTo(Category::class);
        } 
        public function images(){
            return $this->hasMany(Image::class);
        } 
        public function videos(){
            return $this->hasMany(Video::class);
        } 
        public function tags(){
            return $this->belongsTo(Tag::class);
        } 
        public function comments(){
            return $this->hasMany(Comment::class);
        } 

        public function link(){
          return '/posts/'.$this->id;  
        }
}


