<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTradesmanExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tradesman_experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('position')->nullable();
            $table->string('organisation_name')->nullable();
            $table->string('organisation_location')->nullable();
            $table->string('description')->nullable();
            $table->string('start_period')->nullable();
            $table->string('end_period')->nullable();
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
        Schema::dropIfExists('tradesman_experiences');
    }
}
