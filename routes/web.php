<?php

Route::get('/','IndexController@get');
Route::get('/create_quest','CreateQuestController@get');
Route::post('/create_quest','CreateQuestController@post');
Route::get('/user_account','UserAccountController@get');
Route::get('/user_quests','UserQuestsController@get');


Auth::routes();
