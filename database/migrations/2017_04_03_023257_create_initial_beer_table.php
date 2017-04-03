<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInitialBeerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
       {
           Schema::create('beer', function(Blueprint $table) {
             $table->increments('id');
             $table->string('name');
             $table->string('style');
             $table->string('brewery');
             $table->float('ABV');
             $table->timestamps();
           });
       }

       public function down()
       {
           Schema::dropIfExists('beer');
       }

}
