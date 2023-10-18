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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string(column:'full_name');
            $table->string(column:'username')->nullable();
            $table->string(column:'email')->unique();
            $table->timestamp(column:'email_verified_at')->nullable();
            $table->string(column:'password');
            $table->string(column:'photo')->nullable();
            $table->string(column:'phone')->nullable();
            $table->text(column:'address')->nullable();
            $table->enum('role', ['admin', 'vendor', 'customer'])->default('customer');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
