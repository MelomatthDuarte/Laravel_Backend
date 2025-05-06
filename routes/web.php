<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view("home");
})->name("home");

Route::get("/about", function(){
    return view("about");
})->name("about");

Route::get('/posts/create', function(){
    return view('create');
})->name('posts.create');

Route::post('/posts', function(Request $request){
    $title = $request->input('title');
    $description = $request->input('description');

    return redirect()
        ->route('posts.create')
        ->with('success', 'Post is submitted! Title: ' . $title . ' Description: ' . $description);
})->name('posts.store');