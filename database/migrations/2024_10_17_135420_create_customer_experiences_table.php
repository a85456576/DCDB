<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('customer_experiences', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title',80);
            $table->text('description',3000);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('customer_experiences');
    }
};
