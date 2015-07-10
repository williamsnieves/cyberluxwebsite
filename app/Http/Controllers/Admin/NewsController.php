<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\TypeNews;
use App\Http\Requests\NewsValidationRequest;
use Illuminate\Support\Str;
use App\Models\News;
use App\Models\User;
use App\Models\Gallery;

class NewsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//

		$news = News::orderBy('created_at', 'desc')->paginate(10)->setPath('/admin/news');
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
		$gallery = Gallery::lists('name', 'id');
		return view('admin.news_createupdate')->with(array('typenews' => $typenews, 'galleries' => $gallery));
	}

	

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(NewsValidationRequest $request)
	{
		//
		$user = \Auth::user();	
		$news = new News;
		$news->title = $request->input('title');
		$news->summary = $request->input('summary');
		$news->slug = Str::slug($request->input('title'), '-');
		$news->description = $request->input('description');		
		$news->users()->associate($user);		

		if($request->input('galleries') != 'default'){
			$galleryId = Gallery::find($request->input('galleries'));
			$news->galleries()->associate($galleryId);			
		}

		if($request->input('categorynews') != 'default'){
			$typenewsId = TypeNews::find($request->input('categorynews'));
			$news->typeNews()->associate($typenewsId);			
		}
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
		$typenews = TypeNews::lists('name', 'id');
		$news = News::find($id);
		$gallery = Gallery::lists('name', 'id');
		return view('admin.news_createupdate')->with(array('news' => $news, 'typenews' => $typenews, 'galleries' => $gallery));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, NewsValidationRequest $request)
	{
		//
		$user = \Auth::user();		
		$news = News::find($id);
		$news->title = $request->input('title');
		$news->slug = Str::slug($request->input('title'), '-');
		$news->summary = $request->input('summary');
		$news->description = $request->input('description');		
		$news->users()->associate($user);
		

		if($request->input('galleries') != 'default'){
			$galleryId = Gallery::find($request->input('galleries'));
			$news->galleries()->associate($galleryId);			
		}else{
			$galleryId = null;
			$news->galleries_id = $galleryId;
		}

		if($request->input('categorynews') != 'default'){
			$typenewsId = TypeNews::find($request->input('categorynews'));
			$news->typeNews()->associate($typenewsId);			
		}else{
			$typenewsId = null;
			$news->type_news_id = $typenewsId;
		}

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
