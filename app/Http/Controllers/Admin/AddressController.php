<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Address;
use App\Models\Country;
use App\Models\City;
use App\Models\User;

class AddressController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//

		$addresses = Address::paginate(10)->setPath('/admin/address');
		//$users = User::simplePaginate(1);
		return view('admin.address_show')->with('addresses', $addresses);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$countries = Country::lists('country', 'id');
		$cities = City::lists('name', 'id');
		
		//print_r($thumbs);
		return view('admin.address_createupdate')->with(array('countries' => $countries, 'cities' => $cities));
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
		$countryId = Country::find($request->input('countries'));
		$citiesId = City::find($request->input('cities'));
		$address = new Address;
		$address->address = $request->input('address');
		$address->zipcode = $request->input('zipcode');	

		if(!empty($request->input('isbilling')) && $request->input('isbilling')  == 'on'){
			$address->isBilling = 1;
		}else{
			$address->isBilling = 0;
		}	
		$address->countries()->associate($countryId);
		$address->cities()->associate($citiesId);
		$address->users()->associate($user);

		$address->save();

		return redirect('admin/address')->with('message', 'La dirección se ha creado correctamente');
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

		$countries = Country::lists('country', 'id');
		$cities = City::lists('name', 'id');
		$address = Address::find($id);			
		return view('admin.address_createupdate')->with(array('address' => $address, 'countries' => $countries, 'cities' => $cities));
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
		$countryId = Country::find($request->input('countries'));
		$citiesId = City::find($request->input('cities'));
		$address = Address::find($id);
		$address->address = $request->input('address');
		$address->zipcode = $request->input('zipcode');
		if(!empty($request->input('isbilling')) && $request->input('isbilling')  == 'on'){
			$address->isBilling = 1;
		}else{
			$address->isBilling = 0;
		}		
		$address->countries()->associate($countryId);
		$address->cities()->associate($citiesId);
		$address->users()->associate($user);

		$address->save();

		return redirect('admin/address')->with('message', 'La dirección se ha actualizado correctamente');
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

		$address =  Address::find($id);
		$address->delete();

		return redirect()->route('admin.address.index')->with('message', 'Direccion borrada');
	}

}
