<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function Laravel\Prompts\table;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_id')->nullable()->constrained('companies')->onDelete("cascade");
            $table->foreignId('user_id')->nullable()->constrained('users')->onDelete('cascade');
            $table->string('category_short', 255);
            $table->foreign('category_short')->references('shortned_name')->on('categories')->onDelete('cascade');
            $table->string('file',255);
            $table->string('name_file',255);
            // $table->tinyInteger('workflow_status');
            // $table->tinyInteger('status')->default(1);
            $table->string('code');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
