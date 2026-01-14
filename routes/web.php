<?php

use App\Livewire\Website\ContactUs;
use App\Livewire\Website\Home;
use App\Livewire\Website\PrivacyPolicy;
use App\Livewire\Website\Services;
use App\Livewire\Website\TermsOfUse;
use Illuminate\Support\Facades\Route;

Route::get('/',Home::class)->name('home');
Route::get('/services',Services::class)->name('services');
Route::get('/contact-us',ContactUs::class)->name('contactus');
Route::get('/terms-of-use',TermsOfUse::class)->name('termsofuse');
Route::get('/privacy-policy',PrivacyPolicy::class)->name('privacypolicy');

