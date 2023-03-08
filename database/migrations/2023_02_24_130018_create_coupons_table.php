<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->enum('type', [0, 1])->comment('0: Net Tutar 1: Yüzde / Oran (%)');
            $table->string('code')->unique();
            $table->string('title');
            $table->unsignedDecimal('price');
            $table->unsignedDecimal('min_basket_price');
            $table->unsignedDecimal('rate');
            $table->integer('quantity');
            $table->date('expires_at');
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
        Schema::dropIfExists('coupons');
    }
};
