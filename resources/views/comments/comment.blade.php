@extends('layouts.app')

@section('content')

    <div class="row">
            @foreach($comments as $comment)
               <div class="col-md-4"> 
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text"> {{$comments->content}} </p>
                        <a href="#" class="btn btn-primary">Go to post</a>
                    </div>
                </div>
             </div> 
            @endforeach
    

@endsection