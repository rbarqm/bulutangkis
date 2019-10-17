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
			$table->unsignedDecimal('STRING_DIAMETER',2,2);
			$table->unsignedTinyInteger('POINT_REPULSION_POWER');
			$table->unsignedTinyInteger('POINT_DURABILITY');
			$table->unsignedTinyInteger('POINT_HITTING_SOUND');
			$table->unsignedTinyInteger('POINT_SHOCK_ABSORPTION');
			$table->unsignedTinyInteger('POINT_CONTROL');
			$table->unsignedInteger('AVERAGE_PRICE');
			$table->unique(['STRING_BRAND','STRING_NAME','STRING_CATEGORY','STRING_FEELING','STRING_DIAMETER'],'uniq1');
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
