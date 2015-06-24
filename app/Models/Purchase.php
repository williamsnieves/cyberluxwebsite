<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model {

	//

	protected $table = 'purchases';

	public function users(){
		return $this->belongsTo('\App\models\User');
	}

	public function paymentmethods(){
		return $this->belongsTo('\App\models\PaymentMethod');
	}

	public function shippingaddresses(){
		return $this->belongsTo('\App\models\ShippingAddress');
	}

	public function historypurchases(){
		return $this->hasMany('\App\models\HistoryPurchase');
	}

}
