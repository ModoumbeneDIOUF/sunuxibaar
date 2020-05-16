<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Tag;
use App\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(){
        $posts = Post::paginate(12);
        return view('posts.posts')->withPosts($posts);
    }

    public function show($id){
        $post = Post::find($id);
        $image = $post->images;
        return view('posts.post')->with(
            [
                'post'=>$post,
                'images'=>$image
            ]
        );
    }

    public function newPost(){
        $category = Category::all();
        $tags = Tag::all();

        return view('posts.newPost')->with(
            [
                'categories' => $category,
                'tags' => $tags
            ]
        );
    }

  //gnew
  public function store(Request $request){
    $request->validate([
        'post_title' => 'required',
        'post_content' => 'required',
        'post_category' => 'required',
    ]);
    
    $user = Auth::user();

    $post =  new Post();
    $post->title = $request->post_title;
    $post->content = $request->post_content;
    $post->category_id = $request->post_category;
    $post->author_id = $user->id;
    $post->post_type = 'text';

    $post->save();
    // if($request->post_tags){

    //     foreach($request->post_tags as $id) {
    //         DB::table('post_tag')->insert(
    //             [
    //                 'post_id' => $post->id,
    //                 'tag_id' => $id
    //             ]
    //             );
    //     }
    // }
        if($request->hasFile('post_image')){
            $cont = 0;
            $images = $request->file('post_image');
            foreach($images as $image){
                $path = $image->store('public');
                $image = new Image();
                $image->description = '';
                $image->url = $path;
                $image->post_id = $post->id;
                if($cont == 0){
                    $image->featured = true;

                }
                else{
                    $image->featured = false;
                }
                $image->save();
                $cont++;
            }
        }

    // return redirect()->back()->with('message','message');
    return redirect(route('posts'));
}
}
