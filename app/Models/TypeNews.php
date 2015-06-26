<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\News;

class TypeNews extends Model {

	//
	protected $table = 'type_news';

	public function news(){
		return $this->hasMany('News', 'type_news_id');
	}

}
