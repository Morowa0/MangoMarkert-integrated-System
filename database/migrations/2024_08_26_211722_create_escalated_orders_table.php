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
        Schema::create('escalated_orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number');
            $table->string('farmer_id')->nullable();
            $table->string('farmer_name')->nullable();
            $table->string('county')->nullable();
            $table->string('quantity')->nullable();
            $table->unsignedBigInteger('buyer_id')->nullable();
            $table->string('buyer_name')->nullable();
            $table->string('mango_type')->nullable();
            $table->string('duration')->nullable();
            $table->string('price')->nullable();
            $table->string('status')->default('pending');
            $table->string('order_date');
            $table->foreign('buyer_id')->references('id')->on('users')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('escalated_orders');
    }
};
