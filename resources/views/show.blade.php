@extends('layouts.app');
@section('content')
    <div class="card">
        <h5 class="card-header">Post info</h5>
        <div class="card-body">
            <h4 class="card-title"><b>ID:-</b>{{$post->id}}</h4>
            <h5 class="card-title"><b>Tittle:- </b>{{$post->title}}</h5>
            <h5 class="card-title"><b>Description:- </b>{{$post->description}}</h5>
            <h5 class="card-title"><b>Posted by:- </b>{{$post->user ?$post->user->name:""}}</h5>
        </div>
    </div>
@endsection()
