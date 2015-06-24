<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Facades\Hash;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	public function set_password($string){
		$this->password = Hash::make($string);
	}

	public function addresses(){
		return $this->hasMany('\App\models\Address');
	}
	public function paymentprofiles(){
		return $this->hasMany('\App\models\PaymentProfile');
	}

	public function purchases(){
		return $this->hasMany('\App\models\Purchase');
	}

	public function historypurchases(){
		return $this->hasMany('\App\models\HistoryPurchase');
	}

	public function failedpayments(){
		return $this->hasMany('\App\models\FailedPayment');
	}

}
