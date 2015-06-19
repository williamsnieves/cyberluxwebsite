<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomImage extends Model {

	protected $table = 'images';

	public function products(){
		return $this->hasMany('\App\models\Product');
	}


	public function galleries(){
		return $this->belongsToMany('\App\models\Gallery');
	}

	public function productdetails(){
		return $this->belongsToMany('\App\models\ProductDetail');
	}

	public function categories(){
		return $this->hasMany('\App\models\Category');
	}

	//

}
