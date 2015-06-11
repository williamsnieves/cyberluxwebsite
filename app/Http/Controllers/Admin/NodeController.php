<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Node;
use App\Models\Page;

class NodeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$nodes = Node::paginate(10)->setPath('/admin/nodes');
		//$users = User::simplePaginate(1);
		return view('admin.nodes_show')->with('nodes', $nodes);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$pages = Page::all();
		return view('admin.nodes_createupdate')->with('pages', $pages);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$pagesId = Page::find($request->input('pages'));
		$nodes = new Node;
		$nodes->name = $request->input('name');
		$nodes->title = $request->input('title');
		$nodes->content = $request->input('content');
		$nodes->pages()->associate($pagesId);

		$nodes->save();

		return redirect('admin/nodes')->with('message', 'El nodo se ha creado correctamente');
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

		$pages = Page::all();
		$nodes = Node::find($id);
		return view('admin.nodes_createupdate')->with(array('nodes' => $nodes, 'pages' => $pages));
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

		$pagesId = Page::find($request->input('pages'));
		$nodes = Node::find($id);;
		$nodes->name = $request->input('name');
		$nodes->title = $request->input('title');
		$nodes->content = $request->input('content');
		$nodes->pages()->associate($pagesId);

		$nodes->save();

		return redirect('admin/nodes', ['nodes' => $id])->with('message', 'Nodo actualizado');
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

		$nodes =  Node::find($id);
		$nodes->delete();

		return redirect()->route('admin.nodes.index')->with('message', 'Sección borrada');
	}

}
