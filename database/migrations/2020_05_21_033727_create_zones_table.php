<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZonesTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('zones', function (Blueprint $table) {
			$table->id();
			$table->string('sinceIndexValue');
			$table->string('untilIndexValue');
			$table->string('color');
			$table->string('area');
			$table->foreignId('zoning_id')->constrained('zonings')->onDelete('cascade');
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
		Schema::dropIfExists('zones');
	}
}
