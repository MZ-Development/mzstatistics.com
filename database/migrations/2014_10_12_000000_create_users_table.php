<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('name')->default('noname');
            $table->string('email')->unique();
            $table->string('phone')->unique()->default('null');
            $table->string('token')->default('null');
            $table->string('site')->default('null');
            $table->boolean('is_subscribed')->default(false);
            $table->string('password');
            $table->dateTime('updated_at');
            $table->dateTime('created_at');
            $table->string('db_host')->default('null');
            $table->string('db_port')->default('null');
            $table->string('db_name')->default('null');
            $table->string('db_username')->default('null');
            $table->string('db_password')->default('null');
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
}
