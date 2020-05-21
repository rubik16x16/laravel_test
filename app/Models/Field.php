<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Field extends Model{

	protected $table = 'fields';
	protected $fillable = [
		'boundaries', 'status', 'progressPct',
		'area', 'lastUpdatedDt', 'avgNDVI',
		'priorAvgNDVI', 'photo', 'taskid',
		'zone'
	];

	public function user(){

		return $this->belongsTo(User::class);
	}

	public function fieldGroup(){

		return $this->belongsTo(FieldGroup::class);
	}

	public function fieldRotations(){

		return $this->hasMany(FieldRotation::class);
	}

	public function zonings(){

		return $this->hasMany(Zoning::class);
	}

	public function zones(){

		return $this->hasMany(Zone::class);
	}

	public function analytics(){

		return $this->hasMany(Analytic::class);
	}

	public function scoutingNotes(){

		return $this->hasMany(ScoutingNote::class);
	}

	public function shareds(){

		return $this->hasMany(SharedFieldUser::class);
	}
}
