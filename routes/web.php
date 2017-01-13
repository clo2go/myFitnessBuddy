<?php



Route::get('/about', function() {
	return view('pages.about');
});


Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/another', 'PagesController@another');
