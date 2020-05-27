<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms', function (Blueprint $table) {
            $table->bigIncrements('cid');
            $table->string('cpagetitle');
            $table->text('cpagedescription');
            $table->text('ctemplate');
            $table->text('cpageurl');
            $table->string('cmetatitle');
            $table->text('cmetadecription');
            $table->string('cmetakeyword');
            $table->enum('cactive', ['1', '0']);
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
        Schema::dropIfExists('cms');
    }
}
