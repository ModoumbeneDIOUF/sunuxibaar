<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Http\Resources\PostResource;


class PostApiController extends Controller
{
    public function index(){
        $posts = Post::with(['author','images'])->paginate();
        return  PostResource::collection ($posts);
    }
}
