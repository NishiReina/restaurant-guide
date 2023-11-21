<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Http\ViewComposers\SearchComposer;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composers([
           SearchComposer::class => 'top',
           SearchComposer::class => 'detail',
           SearchComposer::class => 'components.search',
        ]);
    }
}
