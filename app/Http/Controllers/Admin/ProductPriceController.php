<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\ProductPrice;
use App\Http\Requests\ProductPriceValidationRequest;

class ProductPriceController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//

		$productPrices = ProductPrice::paginate(10)->setPath('/admin/products');
		//$users = User::simplePaginate(1);
		return view('admin.product_prices_show')->with('productPrices', $productPrices);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//

		$products = Product::lists('name', 'id');
		return view('admin.product_prices_createupdate')->with(array('products' => $products));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ProductPriceValidationRequest $request)
	{
		//

		$productId = Product::find($request->input('products'));		
		$productPrices = new ProductPrice;
		$productPrices->price = $request->input('price');
		$productPrices->tax = $request->input('tax');		
		$productPrices->products()->associate($productId);		

		$productPrices->save();

		return redirect('admin/productprices')->with('message', 'El Precio del producto se ha creado correctamente');
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

		$products = Product::lists('name', 'id');
		$productPrice = ProductPrice::find($id);			
		return view('admin.product_prices_createupdate')->with(array('productPrice' => $productPrice, 'products' => $products));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, ProductPriceValidationRequest $request)
	{
		//

		$productId = Product::find($request->input('products'));		
		$productPrices = ProductPrice::find($id);
		$productPrices->price = $request->input('price');
		$productPrices->tax = $request->input('tax');		
		$productPrices->products()->associate($productId);		

		$productPrices->save();

		return redirect('admin/productprices')->with('message', 'El Precio del producto se ha actualizado correctamente');
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

		$productPrices =  ProductPrice::find($id);		
		$productPrices->delete();

		return redirect()->route('admin.productprices.index')->with('message', 'Precio de producto ('.$productPrices->products->name.') borrado');
	}

}
