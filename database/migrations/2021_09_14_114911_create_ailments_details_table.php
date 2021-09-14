<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAilmentsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ailments_details', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('ailment_id')->unsigned();
            $table->foreign('ailment_id')->references('id')->on('ailments')->onDelete('cascade')->onUpdate('cascade');
            $table->string('description');
            $table->string('causes');
            $table->string('symptoms');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ailments_details');
    }
}
