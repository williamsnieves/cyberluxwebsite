<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model {

	//

	protected $table = 'categories';
	protected $fillable = ['brands_id'];

	public function brands(){
		return $this->belongsTo('\App\models\Brand');
	}

	public function products(){
		return $this->hasMany('\App\models\Product');
	}

}
