<?php

Route::get('/',
    [
        'as'   => '/',
        'uses' => 'HomeController@index',
    ]
);

Route::get('sign-in',
    [
        'as'   => 'sign-in',
        'uses' => 'SignInController@index',
    ]
);

Route::post('sign-in',
    [
        'as'   => 'sign-in',
        'uses' => 'SignInController@signIn',
    ]
);
Route::get('sign-up',
    [
        'as'   => 'sign-up',
        'uses' => 'SignUpController@index',
    ]
);
Route::post('sign-up',
    [
        'as'   => 'sign-up',
        'uses' => 'SignUpController@signUp',
    ]
);

Route::get('dashboard',
    [
        'as'   => 'dashboard',
        'uses' => 'DashboardController@index',
    ]
);

Route::get('logout', [
    'as'   => 'logout',
    'uses' => 'DashboardController@logout',
]);
