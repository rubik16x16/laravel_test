<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FieldRotation extends Model{

	protected $table = 'field_rotations';
	protected $fillable = [
		'cdCrop', 'hybrid', 'sowingDt',
		'phenologicStage'
	];

	public function field(){

		return $this->belongsTo(Field::class);
	}

	public function rotation(){

		return $this->belongsTo(Rotation::class);
	}
}
