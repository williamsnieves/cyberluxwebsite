<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Image;

class AjaxController extends Controller {

	public function getAllImages(){
		$image = Image::all();
		$images = Image::lists('name', 'id');		

		$arrayTest = array("results" => array("id" => "1", "text" => "valor"), "more" => "false");

		$arrayJson = json_encode($arrayTest);
		
		return $image;
	}
}
