<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\CatalogueProductFaker;
use Railken\Amethyst\Managers\CatalogueProductManager;
use Railken\Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class CatalogueProductTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = CatalogueProductManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = CatalogueProductFaker::class;
}
