<?php


Route::group([
    'prefix' => config('saml2.routesPrefix'),
    'middleware' => config('saml2.routesMiddleware'),
], function () {

    Route::get('/logout', [
        'as' => 'saml_logout',
        'uses' => 'Aacotroneo\Saml2\Http\Controllers\Saml2Controller@logout',
    ]);

    Route::get('/login', [
        'as' => 'saml_login',
        'uses' => 'Aacotroneo\Saml2\Http\Controllers\Saml2Controller@login',
    ]);

    Route::get('/metadata', [
        'as' => 'saml_metadata',
        'uses' => 'Aacotroneo\Saml2\Http\Controllers\Saml2Controller@metadata',
    ]);

    Route::post('/acs', [
        'as' => 'saml_acs',
        'uses' => 'Aacotroneo\Saml2\Http\Controllers\Saml2Controller@acs',
    ]);

    Route::get('/sls', [
        'as' => 'saml_sls',
        'uses' => 'Aacotroneo\Saml2\Http\Controllers\Saml2Controller@sls',
    ]);

});
