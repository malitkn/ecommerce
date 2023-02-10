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
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            $table->string('sku')->unique();
            $table->unsignedDecimal('price');
            $table->unsignedBigInteger('stock');
            $table->timestamps();

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

