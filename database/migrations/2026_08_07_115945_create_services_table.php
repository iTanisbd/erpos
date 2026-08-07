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
        Schema::create('services', function (Blueprint $table) {

            $table->id();

            $table->string('code')->unique();

            $table->string('category');

            $table->string('name');

            $table->string('slug')->unique();

            $table->text('description')->nullable();

            $table->decimal('default_price', 10, 2)->default(0);

            $table->decimal('minimum_price', 10, 2)->default(0);

            $table->unsignedInteger('estimated_minutes')->default(0);

            $table->boolean('requires_parts')->default(false);

            $table->boolean('warranty_enabled')->default(false);

            $table->unsignedInteger('warranty_days')->default(0);

            $table->boolean('status')->default(true);

            $table->unsignedInteger('sort_order')->default(0);

            $table->timestamps();

            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
