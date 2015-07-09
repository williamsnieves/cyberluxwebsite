<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\ImagesValidationRequest;
use App\Models\CustomImage;

use Image;

class ImageController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//

		$images = CustomImage::paginate(10)->setPath('/admin/images');
		//$users = User::simplePaginate(1);
		return view('admin.images_show')->with('images', $images);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		//$images = Image::all();
		return view('admin.images_createupdate');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ImagesValidationRequest $request)
	{
		//
		/*$url = $request->input('url');
		if(!empty($request->input('thumbnail')) && $request->input('thumbnail')  == 'on'){			
			$path = public_path('filemanager/userfiles/productsthumbs/');
			//$imagestool = new Image();
			//print_r($imagestool);
			//$imagestool
			//$file = substr($url, 58);
			$img = Image::make($url);
			print_r($img);
			//print_r($file);
			//Image::make($url)->resize(100, 100)->save();
		}*/
		$image = new CustomImage;
		$image->name = $request->input('name');
		$image->url = $request->input('url');		

		$url = $request->input('url');
		if(!empty($request->input('thumbnail')) || $request->input('thumbnail')  == 'on'){
			$image->isThumbnail = 1;
			$image->type = 'thumbnail';			
		}else{
			$image->isThumbnail = 0;
			$image->type = 'normal';
		}

		if(!empty($request->input('thumbnail_product')) || $request->input('thumbnail_product')  == 'on'){
			$image->isThumbnailProduct = 1;
			$image->type = 'thumbnail';			
		}else{
			$image->isThumbnailProduct = 0;
			$image->type = 'normal';
		}
		
		$image->save();
		

		return redirect('admin/images')->with('message', 'La imagen se ha creado correctamente');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//

		$image = CustomImage::find($id);
		return view('admin.images_createupdate')->with('image', $image);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, ImagesValidationRequest $request)
	{
		//

		$image = CustomImage::find($id);
		$image->name = $request->input('name');
		$image->url = $request->input('url');
		if(!empty($request->input('thumbnail')) || $request->input('thumbnail')  == 'on'){
			$image->isThumbnail = 1;
			$image->type = 'thumbnail';			
		}else{
			$image->isThumbnail = 0;
			$image->type = 'normal';
		}

		if(!empty($request->input('thumbnail_product')) || $request->input('thumbnail_product')  == 'on'){
			$image->isThumbnailProduct = 1;
			$image->type = 'thumbnail';			
		}else{
			$image->isThumbnailProduct = 0;
			$image->type = 'normal';
		}

		$image->save();

		return redirect('admin/images')->with('message', 'La imagen se actualizó correctamente');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//

		$image = CustomImage::find($id);
		$image->delete();

		return redirect()->route('admin.images.index')->with('message', 'Imagen borrada');
	}

	

}
