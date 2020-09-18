<?php

Route::group(['middleware' => 'auth:api'], function () {
    Route::group(['prefix' => 'chatgroup'], function () {
        Route::post('/', 'Chatroom\GroupController@index');
        Route::post('store', 'Chatroom\GroupController@store');
    });
    Route::group(['prefix' => 'chatmessage'], function () {
        Route::post('/', 'Chatroom\MessageController@index');
        Route::post('store', 'Chatroom\MessageController@store');
        Route::post('/delete', 'Chatroom\MessageController@delete');
    });
    Route::group(['prefix' => 'chatrecord'], function () {
        Route::post('/', 'Chatroom\MedicalRecordController@index');
        Route::post('store', 'Chatroom\MedicalRecordController@store');
        Route::post('/delete', 'Chatroom\MedicalRecordController@delete');
    });
});
