<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model {

	//

	protected $table = 'brands';

	public function categories(){
		return $this->hasMany('\App\models\Category');
	}

}
