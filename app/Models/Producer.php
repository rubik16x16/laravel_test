<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producer extends Model{

	protected $table = 'producers';
	protected $fillable = [
		'name'
	];

	public function fieldGroups(){

		return $this->hasMany(FieldGroup::class);
	}
}
