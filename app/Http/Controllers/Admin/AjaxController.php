<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\CustomImage;

class AjaxController extends Controller {

	public function getAllImages(Request $request){

		//$image = CustomImage::all();
		if($request->input('filter') == 'products'){
			//$image = CustomImage::where("isThumbnailProduct", "=", 1)->lists('name', 'id');		
			$image = CustomImage::where("isThumbnailProduct", "=", "1")->get();
		}

		if($request->input('filter') == 'gallery'){
			//$image = CustomImage::whereRaw("isThumbnailProduct != '1' OR isThumbnail != 1")->lists('name', 'id');
			$image = CustomImage::where("isThumbnailProduct", "=", "0")->where("isThumbnail", "=", "0")->get();		
		}



		$arrayTest = array("results" => array("id" => "1", "text" => "valor"), "more" => "false");

		$arrayJson = json_encode($arrayTest);
		
		return $image;
	}
}
