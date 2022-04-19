<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastName')->nullable();
            $table->string('username')->nullable();
            $table->string('role');
            $table->string('photo')->nullable();
            $table->string('iller')->nullable();
            $table->string('aciklama')->nullable();
            $table->string('vergi_no')->nullable();
            $table->string('il')->nullable();
            $table->string('ilce')->nullable();
            $table->string('mahalle')->nullable();
            $table->string('adres')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
