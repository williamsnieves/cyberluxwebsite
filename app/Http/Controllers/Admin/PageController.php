<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Page;

class PageController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$pages = Page::paginate(10)->setPath('/admin/pages');
		//$users = User::simplePaginate(1);
		return view('admin.pages_show')->with('pages', $pages);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('admin.pages_createupdate');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//

		$pages = new Page;
		$pages->name = $request->input('name');
		$pages->title = $request->input('title');
		$pages->content = $request->input('content');

		$pages->save();

		return redirect('admin/pages')->with('message', 'La sección se ha creado correctamente');
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

		$page = Page::find($id);
		return view('admin.pages_createupdate')->with('page', $page);
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

		$pages =  Page::find($id);
		$pages->name = $request->input('name');
		$pages->title = $request->input('title');
		$pages->content = $request->input('content');

		$pages->save();

		return redirect()->route('admin.pages.index', ['pages' => $id])->with('message', 'Sección actualizada');
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
		$pages =  Page::find($id);
		$pages->delete();

		return redirect()->route('admin.pages.index')->with('message', 'Sección borrada');
	}

}
