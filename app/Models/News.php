<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Facades\Hash;
use App\Models\TypeNews;

class News extends Model {

	//

	 protected $fillable = ['type_news_id'];

	protected $table = 'news';

	public function typeNews(){
		return $this->belongsTo('\App\models\TypeNews', 'type_news_id');
	}

	public function users(){
		return $this->belongsTo('\App\models\User');
	}

	public function galleries(){
		return $this->belongsTo('\App\models\Gallery', 'galleries_id');
	}

}
