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
        Schema::create('user_tickets', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('users_id')->references('id')->on('users');
            $table->foreignUuid('events_id')->references('id')->on('events');
            $table->foreignUuid('tickets_id')->references('id')->on('tickets');
            $table->integer('paid_amount');
            $table->string('checkin_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_tickets');
    }
};
