<?php

Route::get('/', 'RacaController@index');

Route::group(['prefix' => 'api/'], function(){
    Route::get('raca/', 'RacaController@index');
    Route::get('raca/{id}', 'RacaController@find');
    Route::post('raca/', 'RacaController@create');
    Route::put('raca/{id}', 'RacaController@update');
    Route::delete('raca/{id}', 'RacaController@delete');

    Route::get('cachorro/', 'CachorroController@index');
    Route::get('cachorro/{id}', 'CachorroController@find');
    Route::post('cachorro/', 'CachorroController@create');
    Route::put('cachorro/{id}', 'CachorroController@update');
    Route::delete('cachorro/{id}', 'CachorroController@delete');
}); 