<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            $table->string('payment_id');
            $table->string('order_id');
            $table->string('type'); // crypto - Doshthru
            $table->string('payment_amount')->nullable();
            $table->string('tax_amount')->nullable();
            $table->string('amount');
            $table->string('coin')->nullable();
            $table->string('pay_amount')->nullable();
            $table->string('status');
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
        Schema::dropIfExists('deposits');
    }
}
