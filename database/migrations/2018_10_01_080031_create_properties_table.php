<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('contact');
            $table->string('property_type');
            $table->string('property_for');
            $table->string('developer');
            $table->string('bed_room');
            $table->string('bath_room');
            $table->string('air_conditioning');
            $table->tinyInteger('condition');
            $table->integer('width');
            $table->integer('length');
            $table->string('floor');
            $table->string('address');
            $table->string('township');
            $table->string('state');
            $table->decimal('price', 9,2);
            $table->text('description');
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
        Schema::dropIfExists('properties');
    }
}
