<?php

namespace App\Providers;

use App\Http\Livewire\FormStep1;
use App\Http\Livewire\FormStep2;
use App\Http\Livewire\FormStep3;
use App\Http\Livewire\MainFormWizard;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

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
        Livewire::component('checkout-wizard', MainFormWizard::class);
        Livewire::component('form-step1', FormStep1::class);
        Livewire::component('form-step2', FormStep2::class);
        Livewire::component('form-step3', FormStep3::class);

    }
}
