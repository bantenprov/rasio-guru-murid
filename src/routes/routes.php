<?php

Route::group(['prefix' => 'rasio-guru-murid-sd-mi', 'middleware' => ['web']], function() {

    $controllers = (object) [
        'index'     => 'Bantenprov\RasioGMSdMi\Http\Controllers\RasioGMSdMiController@index',
        'create'     => 'Bantenprov\RasioGMSdMi\Http\Controllers\RasioGMSdMiController@create',
        'store'     => 'Bantenprov\RasioGMSdMi\Http\Controllers\RasioGMSdMiController@store',
        'show'      => 'Bantenprov\RasioGMSdMi\Http\Controllers\RasioGMSdMiController@show',
        'update'    => 'Bantenprov\RasioGMSdMi\Http\Controllers\RasioGMSdMiController@update',
        'destroy'   => 'Bantenprov\RasioGMSdMi\Http\Controllers\RasioGMSdMiController@destroy',
    ];

    Route::get('/',$controllers->index)->name('rasio-guru-murid-sd-mi.index');
    Route::get('/create',$controllers->create)->name('rasio-guru-murid-sd-mi.create');
    Route::post('/store',$controllers->store)->name('rasio-guru-murid-sd-mi.store');
    Route::get('/{id}',$controllers->show)->name('rasio-guru-murid-sd-mi.show');
    Route::put('/{id}/update',$controllers->update)->name('rasio-guru-murid-sd-mi.update');
    Route::post('/{id}/delete',$controllers->destroy)->name('rasio-guru-murid-sd-mi.destroy');

});

