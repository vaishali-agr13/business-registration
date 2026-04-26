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
       Schema::table('business_registrations', function (Blueprint $table) {
            $table->string('name')->nullable();
            $table->string('company_name')->nullable();
            $table->string('password')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       Schema::table('business_registrations', function (Blueprint $table) {
            $table->dropColumn(['name', 'company_name', 'password']);
        });
    }
};
