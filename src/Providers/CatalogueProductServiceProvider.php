<?php

namespace Railken\Amethyst\Providers;

use Illuminate\Support\Facades\Config;
use Railken\Amethyst\Common\CommonServiceProvider;
use Railken\Amethyst\Managers\CatalogueProductManager;
use Railken\Amethyst\Models\CatalogueProduct;

class CatalogueProductServiceProvider extends CommonServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        parent::register();
        $this->app->register(\Railken\Amethyst\Providers\CatalogueServiceProvider::class);
        $this->app->register(\Railken\Amethyst\Providers\ProductServiceProvider::class);
    }

    public function boot()
    {
        parent::boot();
        app('amethyst')->pushMorphRelation('price', 'priceable', 'catalogue-product');
    }
}
