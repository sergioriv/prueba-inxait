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
        Schema::create('departments', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->string('code', 5);
            $table->string('name');
        });

        Schema::create('cities', function (Blueprint $table) {
            $table->integerIncrements('id');
            $table->foreignId('department_id')->constrained('departments');
            $table->string('code', 5);
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cities');
        Schema::dropIfExists('departments');
    }
};
