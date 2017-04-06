<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeerWishListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('beers', function(Blueprint $table) {
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
      Schema::dropIfExists('beers');
  }
}
