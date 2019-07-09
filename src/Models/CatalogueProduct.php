<?php

namespace Amethyst\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Amethyst\Common\ConfigurableModel;
use Railken\Lem\Contracts\EntityContract;

class CatalogueProduct extends Model implements EntityContract
{
    use SoftDeletes;
    use ConfigurableModel;

    /**
     * Create a new Eloquent model instance.
     *
     * @param array $attributes
     */
    public function __construct(array $attributes = [])
    {
        $this->ini('amethyst.catalogue-product.data.catalogue-product');
        parent::__construct($attributes);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function catalogue(): BelongsTo
    {
        return $this->belongsTo(config('amethyst.catalogue.data.catalogue.model'));
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product(): BelongsTo
    {
        return $this->belongsTo(config('amethyst.product.data.product.model'));
    }

    /**
     * Get all prices.
     */
    public function prices(): MorphMany
    {
        return $this->morphMany(config('amethyst.price.data.price.model'), 'priceable');
    }
}
