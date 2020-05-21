<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class SharedFieldUser extends Model{

	protected $table = 'shared_fields_user';
	protected $fillable = [
		'accessType', 'accessGrantedDt'
	];

	public function field(){

		return $this->belongsTo(Field::class);
	}

	public function user(){

		return $this->belongsTo(User::class);
	}
}
