<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Node;
use App\Models\News;
use App\Models\Brand;
use App\Models\CustomImage;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\ProductPrice;
use App\Models\User;

class DashboardController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		//return "estoy en el dashboard";
		$users = User::count();
		$pages = Page::count();
		$nodes = Node::count();
		$news = News::count();
		$images = CustomImage::count();
		$brands = Brand::count();
		$categories = Category::count();
		$products = Product::count();
		$prices = ProductPrice::count();
		$galleries = Gallery::count();
		return view('admin.dashboard')->with(
			array(
				"users"=>$users, 
				"pages" =>$pages, 
				"nodes" =>$nodes, 
				"news" =>$news, 
				"images" =>$images, 
				"brands" => $brands,
				"categories" => $categories,
				"products" => $products,
				"prices" => $prices,
				"galleries" => $galleries
			));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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
	}

}
