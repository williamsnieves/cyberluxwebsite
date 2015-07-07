<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Product;
use App\Models\CustomImage;

class ProductController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$products = Product::paginate(10)->setPath('/admin/products');
		//$users = User::simplePaginate(1);
		return view('admin.products_show')->with('products', $products);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		
		$categories = Category::lists('name', 'id');
		//$images = CustomImage::lists('name', 'id');
		$images = \DB::table('images')->where('isThumbnail', '1')->lists('name','id');
		return view('admin.products_createupdate')->with(array('categories' => $categories, 'images' => $images));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$categoryId = Category::find($request->input('categories'));
		$imageId = CustomImage::find($request->input('images'));		
		$products = new Product;
		$products->name = $request->input('name');
		$products->slug = Str::slug(Str::lower($request->input('name')), '-');
		$products->codproduct = $request->input('codproduct');		
		$products->categories()->associate($categoryId);
		$products->images()->associate($imageId);		

		$products->save();

		return redirect('admin/products')->with('message', 'El producto se ha creado correctamente');
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
		$categories = Category::lists('name', 'id');
		//$images = CustomImage::lists('name', 'id');
		$images = \DB::table('images')->where('isThumbnail', '1')->lists('name','id');
		$product = Product::find($id);			
		return view('admin.products_createupdate')->with(array('product' => $product, 'categories' => $categories, 'images' => $images));
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

		$categoryId = Category::find($request->input('categories'));
		$imageId = CustomImage::find($request->input('images'));
		$products = Product::find($id);
		$products->name = $request->input('name');
		$products->slug = Str::slug(Str::lower($request->input('name')), '-');
		$products->codproduct = $request->input('codproduct');		
		$products->categories()->associate($categoryId);
		$products->images()->associate($imageId);		

		$products->save();

		return redirect('admin/products')->with('message', 'El producto se ha actualizado correctamente');
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

		$products =  Product::find($id);
		$products->delete();

		return redirect()->route('admin.products.index')->with('message', 'Producto borrada');
	}

}
