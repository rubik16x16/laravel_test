<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zoning extends Model{

	protected $table = 'zonings';
	protected $fillable = [
		'outputimg'
	];

	public function field(){

		return $this->belongsTo(Field::class);
	}

	public function rotation(){

		return $this->belongsTo(Rotation::class);
	}

	public function image(){

		return $this->belongsTo(Image::class);
	}

	public function zones(){

		return $this->hasMany(Zone::class);
	}
}
