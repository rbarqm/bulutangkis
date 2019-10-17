<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRaketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raket', function (Blueprint $table) {
            $table->bigIncrements('ID');
			$table->string('BRAND',50);
			$table->string('NAME',50);
			$table->enum('CATEGORY',['SPEED','CONTROL','POWER']);
			$table->enum('WEIGHT',['U','2U','3U','4U','5U','F']);
			$table->enum('GRIP',['G3','G4','G5']);
			$table->unsignedTinyInteger('MAX_TENSION');
			$table->integer('PRICE');
			$table->unique(['BRAND','NAME','CATEGORY','WEIGHT','GRIP','MAX_TENSION'],'uniq1');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('raket');
    }
}
