@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
    <div class="row">
        <div class="col-4 offset-4">
            <a href="/profile/{{$post->user->id}}"></a>
                <img src="/storage/{{$post->image}}" class="w-100">
        </div>
    </div>
    <div class="row pt-2 pb-4">
        <div class="col-4 offset-4">
            <div>
                <p>
                <img src="{{$post -> user -> profile -> profileImage()}}" class="rounded-circle" width="40" height="40">
                    <span class="font-weight-bold"></span>
                        <a href="/profile/{{$post->user->id}}">
                            <span class="text-dark"><b>{{$post->user->username}}</b></span>
                        </a>
                    <span>{{$post->caption}}</span>
                </p>
            </div>
        </div>
    </div>
    @endforeach
    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{$posts->links()}}
        </div>
    </div>
</div>
@endsection
