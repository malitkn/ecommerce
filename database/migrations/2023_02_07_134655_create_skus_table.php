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
        Schema::create('skus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->string('sku')->unique();
            $table->unsignedDecimal('price');
            $table->unsignedBigInteger('stock');
            $table->timestamps();

            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void  */
    public function down()
    {
        Schema::dropIfExists('skus');
    }
};

