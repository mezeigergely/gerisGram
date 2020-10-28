@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-4">
        <img src="/storage/{{$post->image}}" class="w-100">
    </div>
    <div>
        <h3>{{$post->user->username}}</h3>
        <p>{{$post->caption}}</p>
    </div>
</div>
@endsection
