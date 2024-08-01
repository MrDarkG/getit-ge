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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('send_number');
            $table->string('tracking');
            $table->string('location');
            $table->float('weight');
            $table->float('price');
            $table->text('comment')->nullable();
            $table->timestamp('insert_date');
            $table->float('tariff');
            $table->foreignId('status_id')
                ->constrained('statuses')->onDelete('cascade') ;
            $table->string('title');
            $table->string('site');
            $table->string('payment_status')->enum(['paid', 'unpaid']);
            $table->timestamp('payment_date')->nullable();
            $table->float('a_price');
            $table->timestamp('get_date')->nullable();
            $table->foreignId('courier_id')->nullable()
            ->constrained('couriers')->onDelete('cascade');
            $table->string('cur_address')->nullable();
            $table->string('town')->nullable();
            $table->string('town_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
