<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pending_campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('auth_file'); // Adding MEDIUMBLOB column
            $table->string('title');
            $table->string('fullName');
            $table->string('email');
            $table->string('phone'); // Changed to string for phone numbers
            $table->bigInteger('target_money');
            $table->text('description');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pending_campaigns');
    }
};
