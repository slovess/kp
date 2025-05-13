<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->enum('status', ['new', 'processing', 'shipped', 'delivered', 'cancelled'])->default('new');
            $table->enum('payment', ['cash', 'card']);
            $table->decimal('amountorder', 45, 2);
            $table->integer('quantity');

            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('delivery_id')->references('id')->on('deliveries');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
