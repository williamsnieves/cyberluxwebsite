<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model {

	//

	protected $table = 'addresses';

	public function countries(){
		return $this->belongsTo('\App\models\Country');
	}

	public function cities(){
		return $this->belongsTo('\App\models\City');
	}

	public function users(){
		return $this->belongsTo('\App\models\User');
	}

	public function shippingaddress(){
		return $this->hasMany('\App\models\ShippingAddress');
	}

}
