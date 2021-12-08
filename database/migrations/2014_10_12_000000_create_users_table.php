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
            $table->string('firstNames');
            $table->string('lastName');
            $table->string('idNumber');
            $table->integer('grade')->nullable();
            $table->char('section', 3)->nullable(); //For classes normally we have section A,B,C,D,etc.
            $table->enum('role', ['student', 'staff', 'parent']); //This can be done with a different roles table and create a relation
            $table->integer('parent_id')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('suspended')->default(false);
            $table->json('suspension_info')->nullable(); //store date and reason for suspension in json format
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
