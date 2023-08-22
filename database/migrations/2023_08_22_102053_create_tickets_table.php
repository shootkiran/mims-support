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
            $table->id();
            $table->string('title');
            $table->foreignId('user_id')->nullable();
            $table->foreignId('customer_id')->nullable();
            $table->foreignId('category_id')->nullable();
            $table->foreignId('priority_id')->nullable();
            $table->foreignId('status_id')->nullable();
            $table->foreignId('last_replier_id')->nullable();
            $table->dateTime('last_replied_at')->nullable();
            $table->dateTime('scheduled_at')->nullable();
            $table->string('assigned_to_type')->nullable();
            $table->foreignId('assigned_to_id')->nullable();
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
