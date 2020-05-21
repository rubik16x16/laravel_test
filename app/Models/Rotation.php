<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rotation extends Model{

	protected $table = 'rotations';
	protected $fillable = [
		'name', 'sinceDt', 'untilDt'
	];

	public function fieldRotations(){

		return $this->hasMany(FieldRotation::class);
	}

	public function zonings(){

		return $this->hasMany(Zoning::class);
	}

	public function zones(){

		return $this->hasMany(Zone::class);
	}

	public function scoutingNotes(){

		return $this->hasMany(ScoutingNote::class);
	}
}
