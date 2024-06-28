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
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->string('detail');
            $table->float('unit_price');
            $table->float('total_amount');
            $table->timestamps();

            $table->foreignId('id_sales')->nullable();
            $table->foreignId('id_products')->nullable();
            //$table->foreignId('id_sales')->nullable()->constrained('sales')->cascadeOnUpdate()->nullOnDelete();
            //$table->foreignId('id_products')->nullable()->constrained('products')->cascadeOnUpdate()->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('details');
    }
};
