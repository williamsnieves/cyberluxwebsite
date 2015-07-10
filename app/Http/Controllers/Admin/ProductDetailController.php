<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\ProductDetail;

use App\Models\CustomImage;

use App\Models\Product;
use App\Http\Requests\ProductDetailValidationRequest;

class ProductDetailController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$productdetails = ProductDetail::paginate(10)->setPath('/admin/productdetails');
		//$users = User::simplePaginate(1);
		return view('admin.productdetails_show')->with('productdetails', $productdetails);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//

		$products = Product::lists('name','id');
		return view('admin.productdetails_createupdate')->with(array('products'=> $products));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ProductDetailValidationRequest $request)
	{
		//
		$productId = Product::find($request->input('products'));
		$productdetails = new ProductDetail;
		$productdetails->features = $request->input('features');
		$productdetails->specialfeatures = $request->input('specialfeatures');		
		$productdetails->products()->associate($productId);
		/*$myarray = $request->input('items');
		$productdetails->images()->attach($myarray);*/
		$productdetails->save();

		return redirect('admin/productdetails')->with('message', 'El detalle del producto '.$productId->name.' se ha creado correctamente');
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

		$products = Product::lists('name','id');
		$productdetails = ProductDetail::find($id);
		return view('admin.productdetails_createupdate')->with(array('products'=> $products, 'productdetails' => $productdetails));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, ProductDetailValidationRequest $request)
	{
		//

		$productId = Product::find($request->input('products'));
		$productdetails = ProductDetail::find($id);
		$productdetails->features = $request->input('features');
		$productdetails->specialfeatures = $request->input('specialfeatures');		
		$productdetails->products()->associate($productId);
		/*$myarray = $request->input('items');
		$productdetails->images()->attach($myarray);*/
		$productdetails->save();

		return redirect('admin/productdetails')->with('message', 'El detalle del producto '.$productId->name.' se ha creado correctamente');
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

		$ProductDetail =  ProductDetail::find($id);
		$ProductDetail->delete();

		return redirect()->route('admin.productdetails.index')->with('message', 'Detalle del producto ('.$ProductDetail->products->name.') borrada');
	}

	public function getAddImages($id, Request $request){

		$productdetailpost =  ProductDetail::find($id);
		if($request->input('filter') == 'products'){			
			$image = \DB::table('images')->where('isThumbnailProduct', '1')->lists('name','id');
		}
		return view('admin.productdetails_addimages')->with(array('productdetailpost' => $productdetailpost, 'images' =>$image));
	}

	public function postSaveImages(Request $request){	

		//return $request->input('items');	
		$productdetailid = $request->input('productdetailid');
		$productdetails = ProductDetail::find($productdetailid);
		$myarray = $request->input('images');
		$productdetails->images()->attach($myarray);

		return redirect('admin/productdetails')->with('message', 'Se agregaron imagenes a la galería');

	}

	public function getEditImages($id, Request $request){

		$productdetail =  ProductDetail::find($id);

		if($request->input('filter') == 'products'){			
			$image = \DB::table('images')->where('isThumbnailProduct', '1')->lists('name','id');
		}
		
		return view('admin.productdetails_addimages')->with(array('productdetail' => $productdetail, 'images' => $image));
	}

	public function putEditImages(Request $request){	

		
		//return $request->input('items');	
		
		$productdetailid = $request->input('productdetailid');
		$productdetails = ProductDetail::find($productdetailid);	
		$productdetails->images()->detach();	
		$myarray = $request->input('images');
		$productdetails->images()->attach($myarray);

		return redirect('admin/productdetails')->with('message', 'Se actualizaron imagenes en la galería');

   }
}
