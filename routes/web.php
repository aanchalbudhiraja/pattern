<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/employees/hierarchy', [EmployeeController::class, 'showHierarchy']);
