@extends('layouts.app')

@section('content')
        <form action=" {{route('save-category')}} " method="post">
            @csrf
            <div class="form-group row mt-4" >
                <label for="category_title" class="col-md-2 col-form-label">Category title</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="category_title" placeholder="Name of category" name="category_title" required />
                </div>
            </div>
            <div class="form-group row">
                <label for="category_color" class="col-md-2 col-form-label">Category color</label>
                <div class="col-md-10">
                    <input type="color" class="form-control" id="category_color" placeholder="Name of category" name="category_color" required />
                </div>
            </div>
            <div class="form-group row">
                <label  class="col-md-2 col-form-label"></label>
                <div class="col-md-10">
                <input type="submit" class="btn btn-primary" value="Save new category"/>
                </div>
            </div>
        </form>
    <div class="row">
            @foreach($categories as $category)
               <div class="col-md-3 mt-2 mb-2"> 
                <div class="card">
                    <div class="card-body">
                           {{$category->title}} 
                    </div>
                </div>
             </div> 
            @endforeach
    </>

@endsection