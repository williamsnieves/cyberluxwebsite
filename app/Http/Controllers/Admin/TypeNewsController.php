<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\TypeNews;

class TypeNewsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//

		$typenews = TypeNews::paginate(10)->setPath('/admin/categorynews');
		//$users = User::simplePaginate(1);
		return view('admin.typenews_show')->with('typenews', $typenews);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('admin.typenews_createupdate');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//

		$typenews = new TypeNews;
		$typenews->name = $request->input('name');	

		$typenews->save();

		return redirect('admin/categorynews/create')->with('message', 'La categoría de la noticia se ha creado correctamente');
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

		$typenews = TypeNews::find($id);
		return view('admin.typenews_createupdate')->with('typenews', $typenews);
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

		$typenews = TypeNews::find($id);
		$typenews->name = $request->input('name');
		

		$typenews->save();

		return redirect()->route('admin.categorynews.edit', ['typenews' => $id])->with('message', 'Categoría de noticias actualizada');
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

		$typenews = TypeNews::find($id);
		$typenews->delete();

		return redirect()->route('admin.categorynews.index')->with('message', 'Categoría de noticias borrada');
	}

}
