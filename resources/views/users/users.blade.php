@extends('layouts.app')

@section('content')

<div class="row">
            @foreach($users as $user)
               <div class="col-md-4 mt-4"> 
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{$user->first_name}} {{$user->last_name}}</h5>
                      
                    </div>
                </div>
             </div> 
            @endforeach
    </div>    

    <div class="col-md-12">
        {{$users->links()}}
    </div>

@endsection 