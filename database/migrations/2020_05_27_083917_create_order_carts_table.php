<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_carts', function (Blueprint $table) {
            $table->bigIncrements('ocid');
            $table->integer('ocoid');
            $table->integer('ocpid');
            $table->string('ocpname');
            $table->integer('ocpcode');
            $table->float('ocprice');
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
        Schema::dropIfExists('order_carts');
    }
}
