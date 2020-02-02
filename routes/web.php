<?php

Route::get('/','IndexController@get');
Route::get('/createQuest','CreateQuestController@get');
Route::post('/createQuest','CreateQuestController@post');
Route::get('/userAccount','UserAccountController@get');



Auth::routes();
