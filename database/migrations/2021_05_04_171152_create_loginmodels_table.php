<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoginmodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loginmodels', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("uname");
            $table->string("email");
            $table->string("mobile");
            $table->string("gender");
            $table->string("pswd");
            
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
        Schema::dropIfExists('loginmodels');
    }
}
