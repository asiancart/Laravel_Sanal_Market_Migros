<?php

use App\Http\Controllers\WepController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WepController::class ,"index"]);
