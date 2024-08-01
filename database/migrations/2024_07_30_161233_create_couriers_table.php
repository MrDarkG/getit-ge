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
        Schema::create('couriers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamp('date');
            $table->foreignId('status_id')->constrained('courier_statuses')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('delivery_status')->constrained('delivery_statuses')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('tb_reg')->description('1, 2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('couriers');
    }
};
