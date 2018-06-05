<?php

Route::get('/', 'reviewsController@index');

Route::resource('reviews', 'reviewsController');
