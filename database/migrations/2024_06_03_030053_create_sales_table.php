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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->float('totalAmount');
            $table->boolean('state');
            $table->timestamps();

            $table->foreignId('id_customer')->nullable()->constrained('customers')->cascadeOnUpdate()->nullOnDelete();
            //$table->foreignId('id_customers')->nullable()->constrained('customers')->cascadeOnUpdate()->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
