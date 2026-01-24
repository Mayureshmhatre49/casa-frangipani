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
        Schema::create('bookings', function (Blueprint $table) {
    $table->id();

    // Core dates
    $table->date('check_in');
    $table->date('check_out');

    // Guests
    $table->unsignedTinyInteger('guest_count')->default(1);

    // Customer details (future-proof)
    $table->string('customer_name')->nullable();
    $table->string('customer_email')->nullable();
    $table->string('customer_phone')->nullable();

    // Booking meta
    $table->enum('status', [
        'pending',
        'confirmed',
        'cancelled',
        'blocked'
    ])->default('pending');

    $table->enum('source', [
        'website',
        'admin',
        'whatsapp',
        'corporate',
        'agent'
    ])->default('website');

    // Pricing
    $table->decimal('price_per_night', 10, 2)->nullable();
    $table->unsignedSmallInteger('nights')->nullable();
    $table->decimal('total_price', 10, 2)->default(0);

    // Payment (future)
    $table->enum('payment_status', [
        'unpaid',
        'partial',
        'paid',
        'refunded'
    ])->default('unpaid');

    $table->string('payment_reference')->nullable();

    // Notes
    $table->text('admin_notes')->nullable();
    $table->text('customer_notes')->nullable();

    $table->timestamps();

    // Indexes (important for performance)
    $table->index(['check_in', 'check_out']);
    $table->index('status');
});


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
