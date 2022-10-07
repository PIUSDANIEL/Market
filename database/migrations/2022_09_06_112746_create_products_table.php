<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('productname');
            $table->integer('price');
            $table->integer('listprice');
            $table->string('shopname');
            $table->integer('quantity');
            $table->string('size')->nullable();
            $table->string('colour')->nullable();
            $table->string('brand')->nullable();
            $table->string('description')->nullable();
            $table->string('specification')->nullable();
            $table->string('search');
            $table->string('flash_sale')->default(0);
            $table->string('featured')->default(0);
            $table->string('uploader');
            $table->string('condition')->nullable();
            $table->string('categories');
            $table->string('sub_categories')->nullable();
            $table->string('percentage')->nullable();
            $table->string('deleted')->default(0);
            $table->string('main_image');
            $table->string('images')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
