<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\TypeNews;
use App\Models\News;
use App\Models\User;

class NewsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//

		$news = News::paginate(10)->setPath('/admin/news');
		//$users = User::simplePaginate(1);
		return view('admin.news_show')->with('news', $news);
		
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//

		$typenews = TypeNews::all();
		return view('admin.news_createupdate')->with('typenews', $typenews);
	}

	

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$user = User::find(1);
		$typenewsId = TypeNews::find($request->input('categorynews'));

		$news = new News;
		$news->title = $request->input('title');
		$news->description = $request->input('description');
		$news->typeNews()->associate($typenewsId);
		$news->users()->associate($user);	

		$news->save();

		return redirect('admin/news')->with('message', 'La noticia se ha creado correctamente');
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
		$typenews = TypeNews::all();
		$news = News::find($id);
		return view('admin.news_createupdate')->with(array('news' => $news, 'typenews' => $typenews));
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
		$user = User::find(1);
		$typenewsId = TypeNews::find($request->input('categorynews'));

		$news = News::find($id);
		$news->title = $request->input('title');
		$news->description = $request->input('description');
		$news->typeNews()->associate($typenewsId);
		$news->users()->associate($user);	

		$news->save();

		return redirect()->route('admin.news.index', ['news' => $id])->with('message', 'Noticia actualizada');
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
		$news = News::find($id);
		$news->delete();

		return redirect()->route('admin.news.index')->with('message', 'Noticia borrada');
	}

}
