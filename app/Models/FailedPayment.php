<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FailedPayment extends Model {

	//

	protected $table = 'failed_payments';

	public function paymentprofiles(){
		return $this->belongsTo('\App\models\PaymentProfile');
	}

	public function users(){
		return $this->belongsTo('\App\models\User');
	}

}
