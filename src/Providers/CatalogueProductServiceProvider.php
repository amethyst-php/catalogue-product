<?php

namespace Amethyst\Providers;

use Amethyst\Common\CommonServiceProvider;

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
        app('amethyst')->pushMorphRelation('price', 'priceable', 'catalogue-product');
    }
}
