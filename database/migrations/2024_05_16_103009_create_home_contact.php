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
        Schema::create('home_contact', function (Blueprint $table) {
            $table->id();
            $table->String('first_name');
            $table->String('last_name');
            $table->String('email');
            $table->String('phone_number');
            $table->String('datetime');
            $table->String('company_name');
            $table->longText('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_contact');
    }
};
