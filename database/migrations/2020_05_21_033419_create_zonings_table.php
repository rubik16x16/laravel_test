<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZoningsTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('zonings', function (Blueprint $table) {
			$table->id();
			$table->string('outputimg');
			$table->foreignId('field_id')->constrained('fields')->onDelete('cascade');
			$table->foreignId('rotation_id')->constrained('rotations')->onDelete('cascade');
			$table->foreignId('image_id')->constrained('images')->onDelete('cascade');
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
		Schema::dropIfExists('zonings');
	}
}
