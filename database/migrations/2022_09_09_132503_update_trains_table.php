<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->renameColumn("acency", "agency")->change();
            $table->renameColumn("isTrainLate", "is_train_late")->change();
            $table->renameColumn("isTrainDeleted", "is_train_deleted")->change();
            $table->string("departure_railway", 30)->change();
            $table->string("arrival_railway", 30)->change();
            $table->string("departure_hour", 5)->change();
            $table->string("arrival_hour", 5)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->renameColumn("acency", "agency")->change();
            $table->renameColumn("is_train_late", "isTrainLate")->change();
            $table->renameColumn("is_train_deleted", "isTrainDeleted")->change();
            $table->string("departure_railway")->change();
            $table->string("arrival_railway")->change();
            $table->string("departure_hour")->change();
            $table->string("arrival_hour")->change();
            
        });
    }
}
