<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('pid');
            $table->integer('pcode');
            $table->integer('pbrandid')->unsigned();;
            $table->integer('pcategoryid')->unsigned();;
            $table->string('pname');
            $table->string('pdescription', 1000);
            $table->integer('psellerId');
            $table->float('pwholesaleprice');
            $table->float('pretailprice');
            $table->float('psaleprice');
            $table->enum('pstatus', ['1', '0']);
            $table->string('pimage1');
            $table->string('pimage2');
            $table->string('pimage3');
            $table->string('pimage4');
            $table->string('pimage5');
            $table->string('pvideo');
            $table->string('pmetatitle', 500);
            $table->string('pmetakeyword', 500);
            $table->string('pmetadescription', 1000);
            $table->integer('prelatedproducts');
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
        Schema::dropIfExists('porducts');
    }
}
