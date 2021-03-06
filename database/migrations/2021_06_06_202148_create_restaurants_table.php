<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('vendor_id')->unsigned()->index();
            $table->foreign('vendor_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('cusine_id')->unsigned()->index();
            $table->foreign('cusine_id')->references('id')->on('cusines')->onDelete('cascade');
            $table->string('name');
            $table->text('description');
            $table->string('logo');
            $table->string('location')->nullable();
            $table->double('location_latitude')->nullable();
            $table->double('location_longitude')->nullable();
            $table->integer('working_hours');
            $table->integer('minimum_order');
            $table->integer('delivery_fees');

            $table->timestamps();
        });
    }

    
}
