<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class ScoutingNote extends Model{

	protected $table = 'scouting_notes';
	protected $fillable = [
		'date', 'position', 'description',
		'photo',
	];

	public function user(){

		return $this->belongsTo(User::class);
	}

	public function field(){

		return $this->belongsTo(Field::class);
	}

	public function rotation(){

		return $this->belongsTo(Rotation::class);
	}
}
