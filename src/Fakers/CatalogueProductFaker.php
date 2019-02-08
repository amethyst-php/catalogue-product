<?php

namespace Railken\Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class CatalogueProductFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('catalogue', CatalogueFaker::make()->parameters()->toArray());
        $bag->set('product', ProductFaker::make()->parameters()->toArray());

        return $bag;
    }
}
