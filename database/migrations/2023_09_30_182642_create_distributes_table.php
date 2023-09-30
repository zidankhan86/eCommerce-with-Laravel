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
        Schema::create('distributes', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->string('quantity');
            $table->string('price');
            $table->string('selling_price');
            $table->date('date');
            $table->string('image');
            $table->longText('note')->nullable();
            $table->foreignId('shop_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('distributes');
    }
};
