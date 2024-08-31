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
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string('name', 15);
            $table->string('lesson_day', 12)->nullable()->default(null);
            $table->time('start_time')->nullable()->default(null);
            $table->string('audience', 10)->nullable()->default(null);
            $table->unsignedBigInteger('teacher_id');
            $table->unsignedBigInteger('program_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('groups');
    }
};
