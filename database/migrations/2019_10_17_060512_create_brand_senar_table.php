<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandSenarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand_senar', function (Blueprint $table) {
            $table->bigIncrements('ID');
			$table->string('BRAND',50);
			$table->enum('ACTIVE',['Y','N']);
			$table->unique(['BRAND']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brand_senar');
    }
}
