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
        Schema::create('repair_tickets', function (Blueprint $table) {

            $table->id();

            /*
            |--------------------------------------------------------------------------
            | Customer
            |--------------------------------------------------------------------------
            */
            $table->foreignId('customer_id')
                ->constrained()
                ->cascadeOnDelete();


            /*
            |--------------------------------------------------------------------------
            | Device Information
            |--------------------------------------------------------------------------
            */
            $table->foreignId('device_type_id')
                ->constrained()
                ->restrictOnDelete();

            $table->foreignId('brand_id')
                ->constrained()
                ->restrictOnDelete();

            $table->foreignId('device_model_id')
                ->constrained()
                ->restrictOnDelete();


            /*
            |--------------------------------------------------------------------------
            | Ticket Information
            |--------------------------------------------------------------------------
            */
            $table->string('ticket_number')->unique();

            $table->string('device_name')->nullable();

            $table->string('imei_1', 20)->nullable();

            $table->string('imei_2', 20)->nullable();

            $table->string('serial_number')->nullable();

            $table->string('color')->nullable();

            $table->string('password')->nullable();


            /*
            |--------------------------------------------------------------------------
            | Delivery & Notes
            |--------------------------------------------------------------------------
            */
            $table->dateTime('estimated_delivery_at')->nullable();

            $table->text('notes')->nullable();


            /*
            |--------------------------------------------------------------------------
            | Status
            |--------------------------------------------------------------------------
            */
            $table->boolean('status')->default(true);


            /*
            |--------------------------------------------------------------------------
            | Timestamps & Soft Deletes
            |--------------------------------------------------------------------------
            */
            $table->timestamps();

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repair_tickets');
    }
};
