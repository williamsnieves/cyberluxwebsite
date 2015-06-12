<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Brand;

class CategoryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//

		$categories = Category::paginate(10)->setPath('/admin/categories');
		//$users = User::simplePaginate(1);
		return view('admin.categories_show')->with('categories', $categories);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$brands = Brand::lists('name', 'id');
		return view('admin.categories_createupdate')->with('brands', $brands);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//

		$brandId = Brand::find($request->input('brands'));
		$categories = new Category;
		$categories->name = $request->input('name');		
		$categories->brands()->associate($brandId);

		$categories->save();

		return redirect('admin/categories')->with('message', 'La categoría se ha creado correctamente');
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

		$brands = Brand::lists('name', 'id');
		$category = Category::find($id);			
		return view('admin.categories_createupdate')->with(array('category' => $category, 'brands' => $brands));
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

		$brandId = Brand::find($request->input('brands'));
		$categories = Category::find($id);
		$categories->name = $request->input('name');		
		$categories->brands()->associate($brandId);

		$categories->save();

		return redirect('admin/categories')->with('message', 'La categoría se ha actualizado correctamente');
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

		$categories =  Category::find($id);
		$categories->delete();

		return redirect()->route('admin.categories.index')->with('message', 'Categoría borrada');
	}

}
