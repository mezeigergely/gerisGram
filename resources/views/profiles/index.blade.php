@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>{{$user -> username}}</h1></div>
                <div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <img src="{{$user -> profile -> profileImage()}}" class="rounded-circle" width="100" height="100">
                </div>
                <div>
                    <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                </div>
                <div class="d-flex">
                    <div class="pr-5"><strong>{{count($user->posts)}}</strong> post(s)</div>
                    <div class="pr-5"><strong>{{$user -> profile -> followers -> count()}}</strong> followers</div>
                    <div class="pr-5"><strong>{{$user -> following -> count()}}</strong> following</div>
                </div>
                <div>
                    <div class="pr-5"><strong>{{$user -> profile -> title}}</strong></div>
                    <div class="pr-5">{{$user -> profile -> description}}</div>
                </div>
                <div>
                    <div class="pr-5">name: <strong>{{$user -> name}}</strong></div>
                    <div class="pr-5">e-mail: <strong>{{$user -> email}}</strong></div>
                    <div class="pr-5">gender: <strong>{{$user -> role}}</strong></div>
                </div>
                <div>
                    @can('update', $user->profile)
                        <a href="/p/create/">Add new post</a>
                    @endcan
                </div>
                <div>
                    @can('update', $user->profile)
                        <a href="/profile/{{$user->id}}/edit">Edit profile</a>
                    @endcan
                </div>
                <div class="row">
                    @foreach($user->posts as $post)
                        <div class="col-4 pb-4">
                            <a href="/p/{{$post->id}}">
                                <img src="/storage/{{$post->image}}" width="200" height="200">
                            </a>
                        </div>    
                    @endforeach
                </div>
                <div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
