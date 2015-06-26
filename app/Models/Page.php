<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model {

	//
	protected $table = 'pages';

	public function nodes(){
		return $this->hasMany('\App\models\Node', 'pages_id');
	}

	public function galleries(){
		return $this->belongsTo('\App\models\Gallery');
	}
}
