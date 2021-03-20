<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('board_id')->nullable()->default(0);
            $table->foreign('board_id')->references('id')->on('boards')->onDelete('cascade');

            $table->unsignedBigInteger('status_id')->nullable()->default(0);
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade');

            $table->unsignedBigInteger('user_id')->nullable()->default(0);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();

            $table->float('total')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
