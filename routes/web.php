<?php

use App\Livewire\Website\ContactUs;
use App\Livewire\Website\Home;
use App\Livewire\Website\PrivacyPolicy;
use App\Livewire\Website\Projects;
use App\Livewire\Website\Services;
use App\Livewire\Website\TermsOfUse;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/services', Services::class)->name('services');
Route::get('/contact-us', ContactUs::class)->name('contactus');
Route::get('/terms-of-use', TermsOfUse::class)->name('termsofuse');
Route::get('/privacy-policy', PrivacyPolicy::class)->name('privacypolicy');
Route::get('/projects', Projects::class)->name('projects');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//=============================Start Route For Client=============================
Route::middleware(['auth:sanctum', 'verified', 'role:user|superadmin|client'])
    ->prefix('client')
    ->name('client.')
    ->group(function () {

      Route::get('/profile', \App\Livewire\Website\Home::class)->name('dashboard');

    });
//=============================END Route For Client=============================
//=============================Start Route For Admin=============================
Route::middleware(['auth:sanctum', 'verified', 'role:superadmin'])
    ->prefix('client')
    ->name('client.')
    ->group(function () {

      Route::get('/profile', \App\Livewire\Website\Home::class)->name('dashboard');


    });
//=============================END Route For Admin=============================
