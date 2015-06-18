<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model {

	protected $table = 'images';

	public function products(){
		return $this->hasMany('\App\models\Product');
	}


	public function galleries(){
		return $this->belongsToMany('\App\models\Gallery');
	}

	public function categories(){
		return $this->hasMany('\App\models\Category');
	}

	//

}
