<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lastname');
            $table->string('email');
            $table->string('mobile');
            $table->string('age');
            $table->string('gender');
            $table->string('occupation');
            $table->string('religion');
            $table->string('mothername');
            $table->string('fathername');
            $table->string('maritialstatus');
            $table->string('anniversary');
            $table->string('profilepic');
            $table->string('aadharcard');
            $table->string('signature');            
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
        Schema::dropIfExists('customers');
    }
}
