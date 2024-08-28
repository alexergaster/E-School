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
        Schema::create('registration_m_k_s', function (Blueprint $table) {
            $table->id();
            $table->string('parent_name', 70);
            $table->string('parent_phone', 15);
            $table->string('child_name', 70);
            $table->integer('child_age');
            $table->text('comment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registration_m_k_s');
    }
};
