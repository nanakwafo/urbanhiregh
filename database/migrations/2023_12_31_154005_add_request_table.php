<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('request', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->integer('requester_id');
            $table->string('requester_date');
            $table->enum('status',['Pending', 'Approved','Rejected','Completed']);
            $table->string('property_selection');
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
//        Schema::table('request', function (Blueprint $table) {
//            //
//        });
        Schema::dropIfExists('request');
    }
}
