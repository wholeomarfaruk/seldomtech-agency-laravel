<?php

use App\Livewire\Admin\BlankPage;
use Illuminate\Support\Facades\Route;




//=============================Start Route For Admin=============================

Route::get('/dashboard', BlankPage::class)->name('dashboard');
Route::get('/blank-page', BlankPage::class)->name('blank-page');
Route::get('/templates/page-template', App\Livewire\Admin\Templates\PageTemplate::class)->name('page-template');

//user managements
Route::get('/users', App\Livewire\Admin\Users\Users::class)->name('users');

//frontend managements <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<
//services
Route::get('/frontend/services', App\Livewire\Admin\Frontend\OurService::class)->name('frontend.services');

//permissions
Route::get('/permissions/roles', App\Livewire\Admin\Permissions\RoleList::class)->name('roles.list');
Route::get('/permissions/role/create', App\Livewire\Admin\Permissions\RoleCreate::class)->name('roles.create');
Route::get('/permissions/role/edit/{id}', App\Livewire\Admin\Permissions\RoleEdit::class)->name('roles.edit');


//=============================END Route For Admin=============================
