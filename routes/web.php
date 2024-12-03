<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\Auth\ResetPasswordComponent;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Proprietario\RegisterProprietario;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', Home::class)->name('home');

Route::get('password/reset', ResetPasswordComponent::class)->name('password.request');
Route::post('password/email', [ResetPasswordComponent::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', ResetPasswordComponent::class)->name('password.reset');
Route::post('password/reset', [ResetPasswordComponent::class, 'reset'])->name('password.update');
Route::get('/register-propietario', RegisterProprietario::class)->name('register-propietario');
Route::middleware(['auth', 'permission:edit articles'])->group(function () {
    Route::get('/articles', 'ArticleController@index')->name('articles.index');
    Route::post('/articles', 'ArticleController@store')->name('articles.store');

});

