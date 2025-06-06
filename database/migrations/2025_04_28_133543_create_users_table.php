<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->string('fullname')->nullable()->default('Unknown');
        $table->string('email')->unique(); // Ensure email is unique
        $table->string('password');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('users');
}
};
