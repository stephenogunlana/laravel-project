<?php

use Illuminate\Support\Facades\Route;

Route::get('/chat', 'ChatController@index');
Route::post('/send', 'ChatController@sendMessage');
<?php

use Illuminate\Support\Facades\Route;

Route::get('/chat', 'ChatController@index');
Route::post('/send', 'ChatController@sendMessage');
