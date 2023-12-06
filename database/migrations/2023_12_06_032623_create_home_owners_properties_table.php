<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeOwnersPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_owners_properties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('property_number')->nullable();
            $table->string('property_type')->nullable();
            $table->string('property_location')->nullable();
            $table->string('street_name')->nullable();
            $table->string('district')->nullable();
            $table->string('region')->nullable();
            $table->string('nearest_landmark')->nullable();
            $table->string('property_owner_id')->nullable();
            $table->string('property_image')->nullable();
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
        Schema::dropIfExists('home_owners_properties');
    }
}
