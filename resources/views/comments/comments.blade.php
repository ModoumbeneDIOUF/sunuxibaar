@extends('layouts.app')

@section('content')

    <div class="row">
            @foreach($comments as $comment)
               <div class="col-md-4 mt-4"> 
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$comment->author->first_name}} {{$comment->author->last_name}}</h5>
                        <p class="card-text"> {{$comment->content}} </p>
                        <!-- on fait reference à la link() dans Post -->
                        <a href="{{$comment->post->link()}} " class="btn btn-primary">Go to post</a>
                    </div>
                </div>
             </div> 
            @endforeach
    </div>    

    <div class="col-md-12">
        {{$comments->links()}}
    </div>
@endsection