<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("acency");
            $table->string("departure_railway");
            $table->string("arrival_railway");
            $table->string("departure_hour");
            $table->string("arrival_hour");
            $table->tinyInteger("train_code");
            $table->tinyInteger("carriage_number");
            $table->boolean("isTrainLate");
            $table->boolean("isTrainDeleted");
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
        Schema::dropIfExists('trains');
    }
}
