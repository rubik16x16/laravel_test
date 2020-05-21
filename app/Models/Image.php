<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model{

	protected $table = 'images';
	protected $fillable = [
		'processed_tif_url', 'sateliteName',
		'acquisitionDt', 'cloudCover', 'r',
		'g', 'b', 'excludeind', 'dumpScreen',
		'histogram',
	];

	public function zonings(){

		return $this->hasMany(Zoning::class);
	}
}
