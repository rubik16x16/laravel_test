<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScoutingNotesTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('scouting_notes', function (Blueprint $table) {
			$table->id();
			$table->date('date');
			$table->string('position');
			$table->string('description');
			$table->string('photo');
			$table->foreignId('user_id')->constrained('users')->onDelete('cascade');
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
		Schema::dropIfExists('scouting_notes');
	}
}
