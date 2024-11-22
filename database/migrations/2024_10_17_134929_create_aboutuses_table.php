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
        Schema::create('aboutuses', function (Blueprint $table) {
            $table->id();
            $table->text('about_us',8000);
            $table->text('vision',8000);
            $table->text('innovation',8000);
            $table->text('partnership',8000);
            $table->text('excellence',8000);
            $table->text('mission',8000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aboutuses');
    }
};
