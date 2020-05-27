<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCMSSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_m_s_s', function (Blueprint $table) {
            $table->bigIncrements('cid');
            $table->string('cpagetitle');
            $table->text('cpagedescription');
            $table->text('ctemplate');
            $table->string('cpageurl');
            $table->string('cmetatitle');
            $table->text('cmetadecription');
            $table->text('cmetakeyword');
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
        Schema::dropIfExists('c_m_s_s');
    }
}
