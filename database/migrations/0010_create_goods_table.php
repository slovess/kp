<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45);
            $table->text('description')->nullable();
            $table->decimal('price', 20, 2);
            $table->boolean('isPresence');
            $table->boolean('isPopular')->nullable();   
            $table->string('size', 8)->nullable();
            $table->string('image', 255)->nullable();

            $table->foreignId('brand_id')->references('id')->on('brands')->on('materials')->constrained()->onDelete('cascade');
            $table->foreignId('category_id')->references('id')->on('categories')->on('materials')->constrained()->onDelete('cascade');
            $table->foreignId('location_id')->references('id')->on('locations')->on('materials')->constrained()->onDelete('cascade');
            $table->foreignId('material_id')->references('id')->on('materials')->constrained()->onDelete('cascade');
            $table->foreignId('color_id')->references('id')->on('colors')->on('materials')->constrained()->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('goods');
    }
};
