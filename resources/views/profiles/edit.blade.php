@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
    
        <h1>Edit profile</h1><br>
        <div>
            <label for="title">{{ __('Title') }}</label>
            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user -> profile -> title}}" required autocomplete="title" autofocus><br>

                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        <div>
            <label for="description">{{ __('description') }}</label>
            <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user -> profile -> description}}" required autocomplete="description" autofocus><br>

                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        <div>
            <label for="image">{{ __('Profile image') }}</label><br>
            <input type="file" id="image" name="image"><br><br><br>
        </div>

        <div>
            <button class="btn btn-primary">Save profile</button>
        </div>
    </form>
</div>
@endsection
