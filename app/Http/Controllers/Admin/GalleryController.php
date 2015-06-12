<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Gallery;

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

		return view('admin.galleries_createupdate');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
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
	public function update($id, Request $request)
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

}
