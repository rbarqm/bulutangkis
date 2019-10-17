<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSenarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('senar', function (Blueprint $table) {
            $table->bigIncrements('ID');
			$table->string('STRING_BRAND',50);
			$table->string('STRING_NAME',50);
			$table->enum('STRING_CATEGORY',['DURABILITY','REPULSION_POWER','HITTING_SOUND','CONTROL']);
			$table->enum('STRING_FEELING',['SOFT','MEDIUM','HARD']);
			$table->float('STRING_DIAMETER',2,2);
			$table->tinyInteger('POINT_REPULSION_POWER');
			$table->tinyInteger('POINT_DURABILITY');
			$table->tinyInteger('POINT_HITTING_SOUND');
			$table->tinyInteger('POINT_SHOCK_ABSORPTION');
			$table->tinyInteger('POINT_CONTROL');
			$table->integer('AVERAGE_PRICE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('senar');
    }
}
