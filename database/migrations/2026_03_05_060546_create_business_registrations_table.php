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
        Schema::create('business_registrations', function (Blueprint $table) {
        $table->id();
        $table->string('email')->nullable();
        $table->string('phone');
        $table->text('business_address')->nullable();
        $table->string('business_type')->nullable();
        $table->text('business_description')->nullable();
        $table->string('services_required')->nullable();
        $table->integer('registration_fees')->nullable();
        $table->string('payment_proof')->nullable();
        $table->text('business_image')->nullable();
        $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_registrations');
    }
};
