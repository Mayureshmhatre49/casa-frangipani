<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('bot_enquiries', function (Blueprint $table) {
            $table->id();

            // Basic identity
            $table->string('name');
            $table->string('phone');
            $table->string('email')->nullable();

            // Stay details
            $table->date('check_in')->nullable();
            $table->date('check_out')->nullable();
            $table->unsignedTinyInteger('guests')->nullable();

            // Preferences
            $table->string('budget_range')->nullable();
            $table->string('occasion')->nullable();
            $table->string('food_preference')->nullable();

            // Bot meta
            $table->string('bot_source')->default('website_chatbot');
            $table->string('bot_status')->default('new'); 
            // new | contacted | closed

            $table->json('bot_payload')->nullable(); 
            // full chat transcript / answers

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('bot_enquiries');
    }
};
