<?php

Route::get('/','IndexController@get');
Route::get('/createQuest','CreateQuestController@get');
Route::post('/createQuest','CreateQuestController@post');


Auth::routes();
