<?php

/**
* Book related routes
*/
Route::get('/books', 'BookController@index');

Route::get('/books', 'BookController@index');

Route::get('/books/{title?}', 'BookController@view');


/**
* Practice
*/
Route::any('/practice/{n?}', 'PracticeController@index');


/**
* Main homepage visitors see when they visit just /
*/
Route::get('/', 'WelcomeController');
