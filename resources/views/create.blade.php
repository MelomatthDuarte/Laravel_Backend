@extends('layout')

@section('title', 'Create new post')
@section('content')
<h1>Create a New Blog Post</h1>

<form method="POST" action="{{ route('posts.store') }}">
@csrf 
<label for="">Title</label>
<input type="text" name="title">

<label for="">Description</label>
<textarea name="description" id=""></textarea>

<button type="submit">Submit</button>
</form>

@endsection