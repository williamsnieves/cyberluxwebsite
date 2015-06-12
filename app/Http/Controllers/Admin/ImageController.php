<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Image;

class ImageController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//

		$images = Image::paginate(10)->setPath('/admin/images');
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
	public function store(Request $request)
	{
		//

		$image = new Image;
		$image->name = $request->input('name');
		$image->url = $request->input('url');
		$image->type = $request->input('type');		

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

		$image = Image::find($id);
		return view('admin.images_createupdate')->with('image', $image);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		//

		$image = Image::find($id);
		$image->name = $request->input('name');
		$image->url = $request->input('url');
		$image->type = $request->input('type');		

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

		$image = Image::find($id);
		$image->delete();

		return redirect()->route('admin.images.index')->with('message', 'Imagen borrada');
	}

}
