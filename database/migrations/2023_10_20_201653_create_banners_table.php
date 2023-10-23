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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string ('title');
            $table->string('slug')->unique();
            $table->mediumText('description')->nullable();
            $table->string(column:'photo');
            $table->enum('status', ['active', 'inactive'])->default('inactive');
            $table->enum('condition', ['banner', 'promo'])->default('banner');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
