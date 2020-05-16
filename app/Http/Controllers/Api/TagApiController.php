<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tag;
use App\Http\Resources\TagResource;
use App\Http\Resources\PostResource;


class TagApiController extends Controller
{
    public function index(){
        $tags = Tag::all();
        return  TagResource::collection ($tags);
    }

    public function posts($id){
        
        $tag = Tag::find($id);
        $posts = $tag->posts;
        return  PostResource::collection($posts);
    }
}
