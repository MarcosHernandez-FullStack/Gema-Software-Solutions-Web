<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Home\HomeComponent;
use App\Http\Livewire\Nosotros\NosotrosComponent;
use App\Http\Controllers\Portafolio\PortafolioController;
use App\Http\Controllers\Contacto\ContactoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', HomeComponent::class)->name('home');
Route::get('/nosotros', NosotrosComponent::class)->name('nosotros');
Route::get('/servicios', HomeComponent::class)->name('servicios');
Route::get('/portafolio', [PortafolioController::class, 'render'])->name('portafolio');
Route::get('/contacto', [ContactoController::class, 'render'])->name('contacto');
