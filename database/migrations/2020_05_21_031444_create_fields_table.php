<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFieldsTable extends Migration
{
	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('fields', function (Blueprint $table) {
			$table->id();
			$table->string('boundaries');
			$table->string('status');
			$table->string('progressPct');
			$table->string('area');
			$table->dateTime('lastUpdatedDt');
			$table->string('avgNDVI');
			$table->string('priorAvgNDVI');
			$table->string('photo');
			$table->string('taskid');
			$table->string('zone');
			$table->foreignId('user_id')->constrained('users')->onDelete('cascade');
			$table->foreignId('field_group_id')->constrained('field_groups')->onDelete('cascade');
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
		Schema::dropIfExists('fields');
	}
}
