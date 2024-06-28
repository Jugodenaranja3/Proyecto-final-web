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
            $table->string('name');
            $table->integer('quantity');
            $table->float('unitPrice');
            $table->boolean('availability');
            $table->timestamps();
            
            $table->foreignId('id_categories')->nullable()->constrained('categories')->cascadeOnUpdate()->nullOnDelete();
            //$table->foreignId('id_categories')->nullable()->constrained('categories')->cascadeOnUpdate()->nullOnDelete();
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
