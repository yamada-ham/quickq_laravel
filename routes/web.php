<?php

Route::get('/','IndexController@get');
Route::get('/createQuest','CreateQuestController@get');


Auth::routes();
