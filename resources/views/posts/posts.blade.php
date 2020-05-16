@extends('layouts.app')

@section('content')

<div class="row">
            @foreach($posts as $post)
               <div class="col-md-4 mt-4"> 
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$post->title}} </h5>
                        <a class="btn btn-primary" href="{{route('show-posts',['id'=>$post->id])}}"> Read me </a>
                    </div>
                </div>
             </div> 
            @endforeach
    </div>    

    <div class="col-md-12">
        {{$posts->links()}}
    </div>

@endsection 