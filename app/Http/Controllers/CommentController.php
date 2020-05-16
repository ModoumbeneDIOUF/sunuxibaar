<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function index(){
        $comments = Comment::with(['author','post'])->paginate(9);
        return view('comments.comments')->withComments($comments);
    }

     //get one
     public function show($id){
        
        return view('comments.comment')->withComment(Comment::find($id));

    }

  
}
