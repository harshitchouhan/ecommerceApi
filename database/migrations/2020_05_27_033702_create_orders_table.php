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
            $table->bigIncrements('oid');
            $table->string('ocustomername');
            $table->integer('ocid');
            $table->string('oemail');
            $table->text('oaddressline1', 1000);
            $table->text('oaddressline2', 1000);
            $table->integer('ocity');
            $table->integer('ostate');
            $table->integer('ozipcode');
            $table->enum('ostatus', ['not paid', 'paid', 'shipped', 'completed']);
            $table->string('ophone', 15);
            $table->string('oalternatephone', 15);
            $table->integer('odiscountid');
            $table->float('odiscountvalue');
            $table->float('ototalprice');
            $table->float('oshippingprice');
            $table->integer('oshippingid');
            $table->integer('oshippingcode');
            $table->float('ograndtotal');
            $table->enum('opaymenttype', ['cod', 'card']);
            $table->text('opaymentrequest')->nullable();
            $table->text('opaymentresponse')->nullable();
            $table->enum('opaymentstatus', ['1', '0']);
            $table->text('opaymentauthroized')->nullable();
            $table->enum('oisgifted', ['1', '0']);
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
        Schema::dropIfExists('orders');
    }
}
