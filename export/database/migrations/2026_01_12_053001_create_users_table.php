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
        Schema::create('user', function (Blueprint $table) {
        $table->id(); // auto increment

        $table->string('username', 100)->unique();
        $table->string('password');
        $table->string('email', 150)->nullable();
        $table->string('phone_number', 20)->nullable();
        $table->string('bio', 200)->nullable();
        $table->string('business_address', 500)->nullable();
        $table->string('business_hours', 20)->nullable();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
