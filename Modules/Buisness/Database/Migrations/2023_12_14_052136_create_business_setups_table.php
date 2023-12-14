<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('business_setups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id'); // Use unsignedBigInteger for foreign keys
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('mob_number');
            $table->string('email')->unique();
            $table->string('address');
            $table->timestamps();

            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_setups');
    }
};
