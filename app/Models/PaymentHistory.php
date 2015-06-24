<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentHistory extends Model {

	//

	protected $table = 'payment_histories';

	public function paymentprofiles(){
		return $this->belongsTo('\App\models\PaymentProfile');
	}


}
