<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFieldRotationsTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('field_rotations', function (Blueprint $table) {
			$table->id();
			$table->string('cdCrop');
			$table->string('hybrid');
			$table->string('sowingDt');
			$table->string('phenologicStage');
			$table->foreignId('field_id')->constrained('fields')->onDelete('cascade');
			$table->foreignId('rotation_id')->constrained('rotations')->onDelete('cascade');
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
		Schema::dropIfExists('field_rotations');
	}
}
