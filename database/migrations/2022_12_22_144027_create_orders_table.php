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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('subtotal');
            $table->bigInteger('discount');
            $table->string('tax');
            $table->integer('total');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('mobile');
            $table->string('email');
            $table->string('zipcode');
            $table->integer('status');
            $table->date('orderdate');
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
        Schema::dropIfExists('orders');
    }
};
