<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FieldGroup extends Model{

	protected $table = 'field_groups';
	protected $fillable = [
		'name'
	];

	public function producer(){

		return $this->belongsTo(Producer::class);
	}

	public function fields(){

		return $this->hasMany(Field::class);
	}
}
