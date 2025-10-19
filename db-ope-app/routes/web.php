<?php

use App\Http\Controllers\StaffController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/staffs", [StaffController::class, "index"]);

Route::get("/shops", [ShopController::class, "index"]);

Route::get("/items", [ItemController::class, "index"]);
