<?php

/*
 * Authentication
 */
Route::get('login', [
    'as'   => 'hatchly.auth.login',
    'uses' => 'Hatchly\Core\Authentication\Controller@login',
]);

Route::post('login', [
    'uses' => 'Hatchly\Core\Authentication\Controller@doLogin',
]);

Route::get('logout', [
    'as'   => 'hatchly.auth.logout',
    'uses' => 'Hatchly\Core\Authentication\Controller@doLogout',
]);
