<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Analytic extends Model{

	protected $table = 'analytics';
	protected $fillable = [
		'date', 'cdIndex', 'value'
	];

	public function field(){

		return $this->belongsTo(Field::class);
	}
}
