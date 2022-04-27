<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('sender');
            $table->string('receiver');
            // $table->set('route', ['INCOMING', 'OUTGOING']);
            // $table->string('material');
            // $table->set('app', ['SHOPEE', 'LAZADA', 'FACEBOOK', 'INSTAGRAM', 'CAROUSELL', 'GRAB', 'FOODPANDA']);
            // $table->set('status', ['PENDING', 'COMPLETED', 'CANCELLED']);
            // $table->set('modeofpayment', ['ONLINE', 'COD']);
            // $table->decimal('amount', 15, 2); // decimal or integer
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deliveries');
    }
}
