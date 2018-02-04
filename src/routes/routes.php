<?php

Route::group(['prefix' => 'rks-jen-pen-das', 'middleware' => ['web']], function() {

    $controllers = (object) [
        'index'     => 'Bantenprov\RKSJenPenDas\Http\Controllers\RKSJenPenDasController@index',
        'create'     => 'Bantenprov\RKSJenPenDas\Http\Controllers\RKSJenPenDasController@create',
        'store'     => 'Bantenprov\RKSJenPenDas\Http\Controllers\RKSJenPenDasController@store',
        'show'      => 'Bantenprov\RKSJenPenDas\Http\Controllers\RKSJenPenDasController@show',
        'update'    => 'Bantenprov\RKSJenPenDas\Http\Controllers\RKSJenPenDasController@update',
        'destroy'   => 'Bantenprov\RKSJenPenDas\Http\Controllers\RKSJenPenDasController@destroy',
    ];

    Route::get('/',$controllers->index)->name('rks-jen-pen-das.index');
    Route::get('/create',$controllers->create)->name('rks-jen-pen-das.create');
    Route::post('/store',$controllers->store)->name('rks-jen-pen-das.store');
    Route::get('/{id}',$controllers->show)->name('rks-jen-pen-das.show');
    Route::put('/{id}/update',$controllers->update)->name('rks-jen-pen-das.update');
    Route::post('/{id}/delete',$controllers->destroy)->name('rks-jen-pen-das.destroy');

});

