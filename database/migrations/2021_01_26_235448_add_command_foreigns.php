<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCommandForeigns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('commands', function (Blueprint $table){
            $table->integer('product_id')->nullable()->unsigned();
            $table->integer('board_id')->nullable()->unsigned();

//            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
//            $table->foreignId('board_id')->constrained('boards')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
