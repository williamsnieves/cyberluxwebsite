<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model {

	//

	protected $table = 'payment_methods';

	public function accountNumbers(){
		return $this->hasMany('\App\models\AccountNumber');
	}

	public function purchases(){
		return $this->hasMany('\App\models\Purchase');
	}

}
