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
    Schema::create('reservations', function (Blueprint $table) {
        $table->id();
        $table->string('guest_name');
        $table->string('phone');
        $table->date('check_in');
        $table->date('check_out');
        $table->string('room_type')->nullable();
        $table->unsignedBigInteger('price_per_night')->default(0); // in cents or rupiah integer
        $table->unsignedBigInteger('total_price')->default(0);
        $table->enum('status',['pending','confirmed','cancelled'])->default('pending');
        $table->text('notes')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
