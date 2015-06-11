<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {

	//
	protected $table = 'pages';

	public function nodes(){
		return $this->hasMany('\App\models\Node');
	}
}
