<?php

use App\Http\Controllers\employeeController;
use App\Http\Controllers\checkController;
Route::resources([
    'employee' => employeeController::class,
    'check' => checkController::class,
]);
Route::get('login', [employeeController::class , 'getLogin']);
Route::post('login',[employeeController::class , 'postLogin']);