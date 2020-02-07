<?php

Route::get('/','IndexController@get');

Route::get('/category','CategoryController@get');

Route::get('/create_quest','CreateQuestController@get');
Route::post('/create_quest','CreateQuestController@post');

Route::get('/user_account','UserAccountController@get');

Route::get('/user_quests','UserQuestsController@get');

Route::get('/user_account_info_confirm','UserAccountInfoConfirmController@get');
Route::get('/user_account_info_change','UserAccountInfoChangeController@get');
Route::post('/user_account_info_change','UserAccountInfoChangeController@post');

Route::get('/answer_quest','AnswerQuestController@get');
Route::post('/answer_quest','AnswerQuestController@post');


Auth::routes();
