<?php

use App\Livewire\Client\Dashboard;
use Illuminate\Support\Facades\Route;




//=============================Start Route For Client=============================

      Route::get('/dashboard', Dashboard::class)->name('dashboard');


//=============================END Route For Client=============================
