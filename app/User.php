<?php

namespace App;

use App\Models\Field;
use App\Models\ScoutingNote;
use App\Models\SharedFieldUser;
use App\Models\UserLog;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
	use Notifiable;

	/**
	* The attributes that are mass assignable.
	*
	* @var array
	*/
	protected $fillable = [
		'name', 'email', 'password',
	];

	/**
	* The attributes that should be hidden for arrays.
	*
	* @var array
	*/
	protected $hidden = [
		'password', 'remember_token',
	];

	/**
	* The attributes that should be cast to native types.
	*
	* @var array
	*/
	protected $casts = [
		'email_verified_at' => 'datetime',
	];

	public function fields(){

		return $this->hasMany(Field::class);
	}

	public function scoutingNotes(){

		return $this->hasMany(ScoutingNote::class);
	}

	public function logs(){

		return $this->hasMany(UserLog::class);
	}

	public function sharedFiles(){

		return $this->hasMany(SharedFieldUser::class);
	}
}
