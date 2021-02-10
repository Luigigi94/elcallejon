<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTillForeigns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tills', function (Blueprint $table) {
//            foraneas
            $table->integer('command_id')->nullable()->unsigned();
            $table->integer('user_id')->nullable()->unsigned();

//            $table->foreignId('command_id')->constrained('commands')->onDelete('cascade');
//            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('commands_id');
            $table->dropColumn('users_id');
        });
    }
}
