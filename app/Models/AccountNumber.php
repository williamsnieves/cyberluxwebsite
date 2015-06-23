<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;
class AccountNumber extends Model {

	//
	protected $table = 'account_numbers';
	protected $fillable = ['number'];

	public function paymentMethods(){
		return $this->belongsTo('\App\models\PaymentMethod');
	}

	public function encryptAccount($account){
		$this->number = Crypt::encrypt($account);
	}

	public function decryptAccount($account){
		$accountdecrypted = Crypt::decrypt($account);

		return $accountdecrypted;
	}

}
