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
        Schema::table('ads', function (Blueprint $table) {
            $table->string('refresh_page_ads_status_2')->comment('on|off');
            $table->string('refresh_page_ads_image_url_2')->nullable();
            $table->string('refresh_page_ads_redirect_url_2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ads', function (Blueprint $table) {
            Schema::dropIfExists('refresh_page_ads_status_2');
            Schema::dropIfExists('refresh_page_ads_image_url_2');
            Schema::dropIfExists('refresh_page_ads_redirect_url_2');
        });
    }
};
