<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model {

	//

	protected $table = 'cities';

	public function countries(){
		return $this->belongsTo('\App\models\Country');
	}

	public function addresses(){
		return $this->hasMany('\App\models\Address');
	}

}
