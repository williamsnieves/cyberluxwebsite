<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\BrandsValidationRequest;
use Illuminate\Http\Request;

use App\Models\Brand;

class BrandController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$brands = Brand::paginate(10)->setPath('/admin/brands');
		//$users = User::simplePaginate(1);
		return view('admin.brands_show')->with('brands', $brands);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//

		return view('admin.brands_createupdate');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(BrandsValidationRequest $request)
	{
		//

		$brands = new Brand;
		$brands->name = $request->input('name');
		$brands->titlecontent = $request->input('titlecontent');				

		$brands->save();

		return redirect('admin/brands')->with('message', 'La marca se ha creado correctamente');
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

		$brand = Brand::find($id);
		return view('admin.brands_createupdate')->with('brand', $brand);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, BrandsValidationRequest $request)
	{
		//

		$brands = Brand::find($id);
		$brands->name = $request->input('name');
		$brands->titlecontent = $request->input('titlecontent');				

		$brands->save();

		return redirect('admin/brands')->with('message', 'La marca se ha actualizado correctamente');
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
		$brands = Brand::find($id);
		$brands->delete();

		return redirect()->route('admin.brands.index')->with('message', 'Marca borrada');
	}

}
