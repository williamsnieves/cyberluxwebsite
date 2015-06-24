<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HistoryPurchase extends Model {

	//
	protected $table = 'history_purchases';


	public function users(){
		return $this->belongsTo('\App\models\User');
	}

	public function purchases(){
		return $this->belongsTo('\App\models\Purchase');
	}
}
