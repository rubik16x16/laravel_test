<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('images', function (Blueprint $table) {
			$table->id();
			$table->string('processed_tif_url');
			$table->string('sateliteName');
			$table->string('acquisitionDt');
			$table->string('cloudCover');
			$table->string('r');
			$table->string('g');
			$table->string('b');
			$table->string('excludeind');
			$table->string('dumpScreen');
			$table->string('histogram');
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
		Schema::dropIfExists('images');
	}
}
