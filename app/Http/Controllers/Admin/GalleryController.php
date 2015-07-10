<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\GalleriesValidationRequest;
use App\Models\Gallery;

use App\Models\CustomImage;

class GalleryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//

		$galleries = Gallery::paginate(10)->setPath('/admin/galleries');
		//$users = User::simplePaginate(1);
		return view('admin.galleries_show')->with('galleries', $galleries);

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//

		$images = CustomImage::lists('name','id');
		return view('admin.galleries_createupdate')->with(array('images' => $images));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(GalleriesValidationRequest $request)
	{
		//
		
		$galleries = new Gallery;
		$galleries->name = $request->input('name');		

		$galleries->save();

		return redirect('admin/galleries')->with('message', 'La galería se ha creado correctamente');
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
		$gallery = Gallery::find($id);			
		return view('admin.galleries_createupdate')->with(array('gallery' => $gallery));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, GalleriesValidationRequest $request)
	{
		//
		$galleries = Gallery::find($id);
		$galleries->name = $request->input('name');			

		$galleries->save();

		return redirect('admin/galleries')->with('message', 'La galería se ha actualizado correctamente');
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
		$galleries =  Gallery::find($id);		
		$galleries->delete();

		return redirect()->route('admin.galleries.index')->with('message', 'Galería borrada');
	}

	public function getAddImages($id, Request $request){

		$gallerypost =  Gallery::find($id);
				
		$image = \DB::table('images')->where("isThumbnailProduct", "=", "0")->where("isThumbnail", "=", "0")->lists('name','id');
		
		return view('admin.galleries_addimages')->with(array('gallerypost' => $gallerypost, 'images' =>$image));
	}

	public function postSaveImages(Request $request){	

		//return $request->input('items');	
		$galleryid = $request->input('galleryid');
		$galleries = Gallery::find($galleryid);
		$myarray = $request->input('images');
		$galleries->images()->attach($myarray);

		return redirect('admin/galleries')->with('message', 'Se agregaron imagenes a la galería');

	}

	public function getEditImages($id){

		$gallery =  Gallery::with('images')->find($id);
		
		$image = \DB::table('images')->where("isThumbnailProduct", "=", "0")->where("isThumbnail", "=", "0")->lists('name','id');
		
		//return $gallery;
		
		return view('admin.galleries_addimages')->with(array('gallery' => $gallery, 'images' =>$image));
	}

	public function putEditImages(Request $request){	

		
		//return $request->input('items');	
		
		$galleryid = $request->input('galleryid');
		$galleries = Gallery::find($galleryid);	
		$galleries->images()->detach();	
		$myarray = $request->input('images');
		$galleries->images()->attach($myarray);

		return redirect('admin/galleries')->with('message', 'Se actualizaron imagenes en la galería');

	}


}
