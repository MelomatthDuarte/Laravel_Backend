@extends('layout')

@section('title', 'Create new post')
@section('content')
<h1>Create a New Blog Post</h1>

<form method="POST" action="{{ route('posts.store') }}">
@csrf 

<label for="">Title</label>
<input class="@error('title') error-border @enderror" type="text" name="title" value="{{ old('title') }}">
@error('title')
<div class="error">
    {{ $message }}
</div>
@enderror

<label for="">Description</label>
<textarea class="@error('title') error-border @enderror" name="description" id="">{{ old('description') }}</textarea>
@error('description')
<div class="error">
    {{ $message }}
</div>
@enderror

<button type="submit">Submit</button>
</form>

@endsection