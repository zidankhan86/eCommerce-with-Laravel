<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->constrained('categories')->restrictOnDelete();
            $table->string('name');
            $table->string('image')->nullable();
            $table->float('weight');
            $table->string('stock');
            $table->string('price');
            $table->string('discount')->nullable();
            $table->string('discounted_price')->nullable();
            $table->string('time');
            $table->longText('description');
            $table->longText('product_information');
            $table->boolean('status')->default(0);


            $table->foreign('category_id')->references('id')->on('categories') ->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
