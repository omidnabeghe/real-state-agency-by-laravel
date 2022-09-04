<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table-> string('title');
            $table->text('description');
            $table->text('address');
            $table-> string('amount');
            $table-> text('image');
            $table-> string('floor');
            $table-> integer('year');
            $table-> integer('storeroom');
            $table-> integer('balcony');
            $table-> integer('area');
            $table-> integer('room');
            $table-> string('toilet');
            $table-> integer('parking');
            $table-> string('tag');
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('cat_id')->constrained('categories')->onUpdate('cascade')->onDelete('cascade');
            $table-> integer('status');
            $table-> integer('sell_status');
            $table-> integer('type');
            $table-> integer('view')->nullable();
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
        Schema::dropIfExists('ads');
    }
}
