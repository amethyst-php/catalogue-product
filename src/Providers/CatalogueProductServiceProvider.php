<?php

namespace Amethyst\Providers;

use Amethyst\Core\Providers\CommonServiceProvider;

class CatalogueProductServiceProvider extends CommonServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        parent::register();
        $this->app->register(\Amethyst\Providers\CatalogueServiceProvider::class);
        $this->app->register(\Amethyst\Providers\ProductServiceProvider::class);
    }

    public function boot()
    {
        parent::boot();
    }
}
