<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInviteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invite', function (Blueprint $table) {
            $table->increments('id');
            $table->String('suffix');
            $table->String('category');
            $table->String('firstname');
            $table->String('lastname');
            $table->String('sex');
            $table->String('companyname');
            $table->String('title');
            $table->String('telephone');
            $table->String('email')->unique();
            $table->String('wife');
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
        Schema::drop('invite');
    }
}
