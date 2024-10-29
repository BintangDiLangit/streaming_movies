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
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('refresh_page_ads_status')->comment('on|off');
            $table->string('refresh_page_ads_image_url');
            $table->string('refresh_page_ads_redirect_url');
            $table->string('minute_ads_status')->comment('on|off');
            $table->string('minute_ads_redirect_url');
            $table->integer('minute_ads_interval');
            $table->string('static_ads_status')->comment('on|off');
            $table->string('static_ads_image_url');
            $table->string('static_ads_redirect_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ads');
    }
};
