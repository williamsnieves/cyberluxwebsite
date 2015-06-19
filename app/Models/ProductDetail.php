<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model {

	//
	protected $table = 'product_details';

	public function products(){
		return $this->belongsTo('\App\models\Product');
	}

	public function images(){
		return $this->belongsToMany('\App\models\CustomImage');
	}

}
