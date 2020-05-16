@extends('layouts.app')

@section('content')

<div class="row mt-4">
            
               <div class="col-md-12 mb-2"> 
                <div class="card">
                    <div class="card-body">
                        <form action=" {{route('save-post')}} " method="post" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group row mt-4" >
                                    <label for="post_title" class="col-md-2 col-form-label">Post title</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="post_title" placeholder="Post title" name="post_title" required />
                                    </div>
                                </div>
                                <div class="form-group row mt-4" >
                                    <label for="post_content" class="col-md-2 col-form-label">Post content</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" id="post_content" cols="10" rows="10" placeholder="content" name="post_content" required ></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mt-4" >
                                    <label for="post_category" class="col-md-2 col-form-label">Post category</label>
                                    <div class="col-md-10">
                                            <select class="form-control" name="post_category" id="post_category" required>
                                                <option selected>Select a category</option>
                                                @foreach($categories as $cat)
                                                    <option value="{{$cat->id}}">{{$cat->title}}</option>
                                                @endforeach
                                            </select>
                                    </div>  
                                </div>
                                <div class="form-group row mt-4" >
                                    <label for="post_category" class="col-md-2 col-form-label">Post category</label>
                                    <div class="col-md-10">
                                            <select class="form-control" name="post_tags" id="post_tags" multiple required>
                                                <option selected>Select tags</option>
                                                @foreach($tags as $tag)
                                                    <option value="{{$tag->id}}">{{$tag->title}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                   
                                </div>
                                <div class="form-group row mt-4" >
                                        <label for="post_image" class="col-md-2 col-form-label">Post Images</label>
                                        <div class="col-md-10">
                                            <input class="form-control-file" type="file" id="post_image" name="post_image[]" multiple />
                                        </div>
                                </div>
                                <div class="form-group row mt-4" >
                                    <label for="" class="col-md-2 col-form-label"></label>
                                    <div class="col-md-10">
                                        <button type="submit" class="btn btn-primary">Save new post</button>
                                        
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
             </div> 
            
           
    </div>    

  

@endsection 