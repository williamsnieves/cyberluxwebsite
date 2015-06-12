<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	//

	protected $table = 'products';

	public function categories(){
		return $this->belongsTo('\App\models\Category');
	}

	public function images(){
		return $this->belongsTo('\App\models\Image');
	}

	public function productPrices(){
		return $this->hasMany('\App\models\ProductPrice');
	}

}
