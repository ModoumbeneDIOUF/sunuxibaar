<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Resources\CategoriesResource;
use App\Category;


class CategoryController extends Controller
{
    //get all
    public function index(){

        return view('categories.categories')->with(
            [
                'categories' => Category::all()
            ]
            );
    }

     //get one
     public function show($id){
        
        return view('categories.category')->with(
            [
                'category' => Category::find($id)
            ]
            );
    }

     //gnew
     public function store(Request $request){
        $request->validate([
            'category_title' => 'required',
            'category_color' => 'required',
        ]);

        $cat =  new Category();
        $cat->title = $request->category_title;
        $cat->color = $request->category_color;

        $cat->save();

        return redirect()->back()->with('message','message');
    }
}
