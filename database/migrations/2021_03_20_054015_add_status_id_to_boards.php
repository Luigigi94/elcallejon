<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusIdToBoards extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('boards', function (Blueprint $table) {

            /*
            $table->unsignedBigInteger('board_id')->nullable()->unsigned();
            $table->foreign('board_id')->references('id')->on('boards')->onDelete('cascade');
             */
            $table->unsignedBigInteger('status_id')->nullable()->unsigned();
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('boards', function (Blueprint $table) {
            //
        });
    }
}
