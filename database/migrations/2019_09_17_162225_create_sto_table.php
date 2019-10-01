<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('image');
            $table->string('address');
            $table->string('town');
            $table->string('description');
            $table->string('start_hour_monday');
            $table->string('end_hour_monday')->default('null');
            $table->string('start_hour_tuesday');
            $table->string('end_hour_tuesday')->default('null');
            $table->string('start_hour_wednesday');
            $table->string('end_hour_wednesday')->default('null');
            $table->string('start_hour_thursday');
            $table->string('end_hour_thursday')->default('null');
            $table->string('start_hour_friday');
            $table->string('end_hour_friday')->default('null');
            $table->string('start_hour_saturday');
            $table->string('end_hour_saturday')->default('null');
            $table->string('start_hour_sunday');
            $table->string('end_hour_sunday')->default('null');
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
        Schema::dropIfExists('sto');
    }
}
