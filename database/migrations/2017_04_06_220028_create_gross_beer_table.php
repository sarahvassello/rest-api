<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrossBeerTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('grosses', function(Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('style');
      $table->string('brewery');
      $table->float('ABV')->default(0);
      $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('grosses');
}
}
