<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreateCatalogueProductsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create(Config::get('amethyst.catalogue-product.data.catalogue-product.table'), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('catalogue_id')->unsigned();
            $table->foreign('catalogue_id')->references('id')->on(Config::get('amethyst.catalogue.data.catalogue.table'));
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on(Config::get('amethyst.product.data.product.table'));
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists(Config::get('amethyst.catalogue-product.data.catalogue-product.table'));
    }
}
