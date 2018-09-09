<?php

Route::get('/', function () {
    return view('user.blog');
});

Route::get('post', function(){
	return view('user.post');
})->name('post');

Route::get('admin/home', function(){
	return view('admin.home');
});

Route::get('admin/post', function(){
	return view('admin.post.post');
});
	