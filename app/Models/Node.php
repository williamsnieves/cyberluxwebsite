<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Node extends Model {

	//

	protected $table = 'nodes';

	protected $fillable = ['pages_id'];


	public function pages(){
		return $this->belongsTo('\App\models\Page', 'pages_id');
	}

}
