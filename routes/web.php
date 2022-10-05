<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\consulta;



Route::get('/',[consulta::class, 'index'])->name('datos');

Route::post('/',[consulta::Class,'index'])->name('estado');
//Route::get('/',[consulta::class, 'inicio'])->name('datos');