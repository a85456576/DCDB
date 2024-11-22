<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('service_customer_experiences', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title',200);
            $table->text('description',2000);
            $table->foreignUuid('service_id')
                ->constrained()
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('service_customer_experiences');
    }
};
