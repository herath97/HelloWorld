<?php

namespace Custom\HelloWorld;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Custom\HelloWorld\Livewire\HelloWorldIndex;

class HelloWorldServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/config/helloworld.php', 'helloworld');
    }

    public function boot()
    {
        // Register Livewire component
        Livewire::component('helloworld', HelloWorldIndex::class);

        //Load package routes
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        // Load package views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'helloworld');

        // Publish views
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/helloworld'),
        ], 'helloworld-views');

        //Publish images
        $this->publishes([
            __DIR__.'/../public' => public_path('custom/helloworld'),
        ], 'public');
    }
}
