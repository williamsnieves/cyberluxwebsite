<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentProfile extends Model {

	//
	protected $table = 'payment_profiles';

	public function users(){
		return $this->belongsTo('\App\models\User');
	}

	public function paymenthistories(){
		return $this->hasMany('\App\models\PaymentHistory');
	}

	public function failedpayments(){
		return $this->hasMany('\App\models\FailedPayment');
	}
}
