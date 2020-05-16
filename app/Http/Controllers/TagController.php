<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagController extends Controller
{
    public function index(){

        return view('tags.tags')->with(
            [
                'tags' => Tag::all()
            ]
            );
    }

       //get one
       public function show($id){
        
        return view('tags.tag')->with(
            [
                'tag' => Tag::find($id)
            ]
            );
    }

    public function store(Request $request){
        $request->validate([
            'tag_title' => 'required',
           
        ]);

        $tag =  new Tag();
        $tag->title = $request->tag_title;
      
        $tag->save();

        return redirect()->back()->with('message','message');
    }
}
