<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Node extends Model {

	//

	protected $table = 'nodes';


	public function pages(){
		return $this->belongsTo('\App\models\Page');
	}

}
