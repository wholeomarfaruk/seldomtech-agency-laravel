<?php

use App\Livewire\Website\Home;
use App\Livewire\Website\Services;
use Illuminate\Support\Facades\Route;

Route::get('/',Home::class)->name('home');
Route::get('/services',Services::class)->name('services');
