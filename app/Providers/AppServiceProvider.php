<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use App\Http\Livewire\Contacto\ContactoComponent;
use App\Http\Livewire\Contacto\SocialesComponent;
use App\Http\Livewire\Servicios\PreciosComponent;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Livewire::component('precios', PreciosComponent::class);
        Livewire::component('contacto', ContactoComponent::class);
        Livewire::component('sociales', SocialesComponent::class);
    }
}
