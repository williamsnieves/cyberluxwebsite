<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShippingAddress extends Model {

	//

	protected $table = 'shipping_addresses';

	public function address(){
		return $this->belongsTo('\App\models\Address');
	}

	public function purchases(){
		return $this->hasMany('\App\models\Purchase');
	}

}
