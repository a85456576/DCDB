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
        Schema::create('reserve_packages', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name', 60);
            $table->string('email', 80);
            $table->string('phone', 11);
            $table->string('company', 120);
            $table->smallInteger('is_read')
                ->default(0);
            $table->foreignUuid('package_id')
                ->constrained()
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserve_packages');
    }
};
