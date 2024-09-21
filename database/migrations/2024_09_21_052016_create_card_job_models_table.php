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
        Schema::create('card_job_models', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('des');
            $table->string('budget');
            $table->string('duration');
            $table->string('req');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('card_job_models');
    }
};
