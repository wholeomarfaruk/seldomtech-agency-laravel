<?php

use Illuminate\Support\Facades\Route;




//=============================Start Route For Client=============================

      Route::get('/profile', \App\Livewire\Website\Home::class)->name('dashboard');


//=============================END Route For Client=============================
