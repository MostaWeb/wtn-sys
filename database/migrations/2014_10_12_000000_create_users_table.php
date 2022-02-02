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
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('date_of_birth')->nullable();
            $table->string('phone')->nullable();
            $table->date('emp_date')->nullable();
            $table->integer('emp_number')->nullable();
            $table->string('job_name')->nullable();
            $table->unsignedInteger('department_id');
            $table->string('nationality')->nullable();
            $table->string('area')->nullable();
            $table->string('avatar')->default('uploads/avatar.png');
            $table->enum('status', ['اجازة', 'متاح', 'خارج الخدمة'])->nullable();
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
}
