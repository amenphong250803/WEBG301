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
        Schema::create('classes_schedule', function (Blueprint $table) {
            $table->id();
            $table->foreignId('schedule_id')->constrainedTo()->onDelete('cascade');
            $table->foreignId('classes_id')->constrainedTo()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes_schedule');
    }
};
