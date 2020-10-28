@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" enctype="multipart/form-data" action="/p">
    @csrf
    
        <h1>Add New Post</h1><br>
        <div>
            <label for="caption">{{ __('Post Caption') }}</label>
            <input id="caption" type="text" class="form-control @error('caption') is-invalid @enderror" name="caption" value="{{ old('caption') }}" required autocomplete="caption" autofocus><br>

                @error('caption')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>

        <div>
            <label for="image">{{ __('Post image') }}</label><br>
            <input type="file" id="image" name="image"><br><br><br>
        </div>

        <div>
            <button class="btn btn-primary">Add New Post</button>
        </div>
    </form>
</div>
@endsection
