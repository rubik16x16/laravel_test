<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model{

	protected $table = 'zones';
	protected $fillable = [
		'sinceIndexValue', 'untilIndexValue',
		'color', 'area'
	];

	public function zoning(){

		return $this->belongsTo(Zoning::class);
	}

	public function field(){

		return $this->belongsTo(Field::class);
	}

	public function rotation(){

		return $this->belongsTo(Rotation::class);
	}
}
