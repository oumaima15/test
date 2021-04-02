<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableParrainnages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parrainnages', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_pere');
            $table->bigInteger('id_parrai');
            $table->bigInteger('id_ut');

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
        Schema::dropIfExists('table_parrainnages');
    }
}
