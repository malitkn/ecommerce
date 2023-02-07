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
        Schema::create('variants', function (Blueprint $table) {
            $table->id();
            $table->primary(['attribute_id','sku_id']);
            $table->unsignedBigInteger('sku_id');
            $table->unsignedInteger('attribute_id');
            $table->string('value');
            $table->timestamps();

            $table->foreignId('attribute_id')->constrained()->cascadeOnDelete();
            $table->foreignId('sku_id')->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('variants');
    }
};
