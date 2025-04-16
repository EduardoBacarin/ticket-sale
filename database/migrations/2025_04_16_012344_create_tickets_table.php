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
        Schema::create('tickets', function (Blueprint $table) {
            $table->uuid();
            $table->foreignUuid('events_id')->references('id')->on('events');
            $table->foreignUuid('sectors_id')->references('id')->on('sectors');
            $table->string('name')->index();
            $table->dateTime('start_sale_at');
            $table->dateTime('end_sale_at');
            $table->integer('inital_stock');
            $table->integer('remaining_stock');
            $table->integer('amount')->nullable()->index();
            $table->boolean('available');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
