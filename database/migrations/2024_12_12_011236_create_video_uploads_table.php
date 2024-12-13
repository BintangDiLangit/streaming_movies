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
        Schema::create('video_uploads', function (Blueprint $table) {
            $table->id();
            $table->string('video_id');
            $table->string('video_path');
            $table->enum('status', ['processing', 'uploading', 'done', 'failed'])->default('processing');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video_uploads');
    }
};
