<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEmailAndPasswordToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users',function ( Blueprint $table)
        {
            $table->string('email');
            $table->string('password');

        });
    }


    public function down()
    {
        Schema::table('users',function(Blueprint $table)


        {
            $table->dropColumn('email');
            $table->dropColumn('password');

        });
    }
}
