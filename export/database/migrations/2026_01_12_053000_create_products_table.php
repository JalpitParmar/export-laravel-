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
        Schema::create('products', function (Blueprint $table) {
        $table->id(); // auto increment primary key

        $table->string('product_name');
        $table->string('category', 100);
        $table->text('packet_sizes');
        $table->text('description');
        $table->text('key_features');
        $table->string('image_path')->nullable();

        $table->timestamp('created_at')->useCurrent();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
