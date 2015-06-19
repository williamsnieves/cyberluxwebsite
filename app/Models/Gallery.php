<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model {

	//

	protected $table = 'galleries';

	public function images(){
		return $this->belongsToMany('\App\models\CustomImage');
	}

	public function pages(){
		return $this->hasMany('\App\models\Page');
	}

	public function news(){
		return $this->hasMany('\App\models\News');
	}

}
