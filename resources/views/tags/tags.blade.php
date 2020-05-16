@extends('layouts.app')

@section('content')
        <form action=" {{route('save-tag')}} " method="post">
            @csrf
            <div class="form-group row mt-4" >
                <label for="tag_title" class="col-md-2 col-form-label">Tag title</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="tag_title" placeholder="Name of tag" name="tag_title" required />
                </div>
            </div>
            
            <div class="form-group row">
                <label  class="col-md-2 col-form-label"></label>
                <div class="col-md-10">
                <input type="submit" class="btn btn-primary" value="Save new tag"/>
                </div>
            </div>
        </form>
    <div class="row">
            @foreach($tags as $tag)
               <div class="col-md-3 mt-2 mb-2"> 
                <div class="card">
                    <div class="card-body">
                           {{$tag->title}} 
                    </div>
                </div>
             </div> 
            @endforeach
    

@endsection