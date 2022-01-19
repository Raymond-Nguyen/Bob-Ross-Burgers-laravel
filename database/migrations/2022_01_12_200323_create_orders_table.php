<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('orders', function (Blueprint $table) {
      $table->id();
      $table->timestamps();
      $table->string('name');
      $table->string('description');
      $table->float('price');
      $table->string("ingredients")->nullable();
      $table->string("burgerMeat");
      $table->string('otherIngredients')->nullable();
      $table->string('extraItem')->nullable();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('orders');
  }
}