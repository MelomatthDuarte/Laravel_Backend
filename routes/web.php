<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view("home");
})->name("home");

Route::get("/about", function(){
    return view("about");
})->name("about");

Route::name('posts.')->prefix('posts')->group(function(){
    Route::get('/create', function(){
    return view('posts.create');
})->name('create');

Route::post('/', function(Request $request){
    $validate = $request->validate([
        'title' => 'required|min:3',
        'description' => 'required|min:10'
    ]);

    return redirect()
        ->route('posts.create')
        ->with('success', 'Post is submitted! Title: ' . $validated['title'] . ' Description: ' . $validated['description']);
})->name('store');
});

