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
            $table->string('email',140)->unique()->nullable();
            $table->string('password');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->text('avatar')->nullable()->comment('avatar');
            $table->tinyInteger('is_active')->default(0)->comment('0 => inactive, 1 => active');
            $table->string('user_type')->default('user');
            $table->tinyInteger('status')->default(0);//activation, just work at first, but if we want to inactive user, we should change status=>0.(because he is hackering)
            $table->timestamp('email_verified_at')->nullable();
            $table->string('verify_token')->nullable();
            $table->rememberToken();
            $table->timestamp('remember_token_expire')->nullable();
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
