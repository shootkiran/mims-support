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
            $table->string('subject');
            $table->foreignId('created_by');
            $table->foreignId('branch_id')->nullable();
            $table->text('description')->nullable();
            $table->foreignId('status_id')->default(1);
            $table->foreignId('assigned_to')->nullable();
            $table->foreignId('priority_id')->default(1);
            $table->foreignId('category_id')->nullable();
            $table->foreignId('team_id')->nullable();
            $table->foreignId('closed_by')->nullable();
            $table->dateTime('closed_at')->nullable();
            $table->foreignId('customer_id')->nullable();
            $table->foreignId('lead_id')->nullable();
            $table->dateTime('scheduled_for')->nullable();
            $table->foreignId('last_replied_by')->nullable();
            $table->softDeletes();
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
