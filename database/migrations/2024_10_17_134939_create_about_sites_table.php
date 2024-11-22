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
        Schema::create('about_sites', function (Blueprint $table) {
            $table->id();
            $table->string('physical_location', 255);
            $table->string('map_location', 255);
            $table->string('phone', 15);
            $table->string('email', 60);
            $table->string('facebook', 255);
            $table->string('instagram', 255);
            $table->string('linkdin', 255);
            $table->string('youtube', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_sites');
    }
};
