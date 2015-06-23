<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\PaymentProfile;
use App\Models\User;

class PaymentProfileController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//

		$paymentprofiles = PaymentProfile::paginate(10)->setPath('/admin/paymentprofiles');
		//$users = User::simplePaginate(1);
		return view('admin.paymentprofile_show')->with('paymentprofiles', $paymentprofiles);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//		
		return view('admin.paymentprofile_createupdate');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//

		$userId = User::find(1);
		$paymentprofile = new PaymentProfile;
		$paymentprofile->creditcard = $request->input('creditcard');
		//$accountnumber->encryptAccount($request->input('number'));
		$paymentprofile->printedname = $request->input('printedname');
		$paymentprofile->securenumber = $request->input('securenumber');
		$paymentprofile->expirationdate = $request->input('expirationdate');
		$paymentprofile->users()->associate($userId);

		$paymentprofile->save();

		return redirect('admin/paymentprofiles')->with('message', 'El perfil de pago se ha creado correctamente');
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
		$paymentprofile = PaymentProfile::find($id);				
		return view('admin.paymentprofile_createupdate')->with(array('paymentprofile' => $paymentprofile));
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

		$userId = User::find(1);
		$paymentprofile = PaymentProfile::find($id);
		$paymentprofile->creditcard = $request->input('creditcard');
		//$accountnumber->encryptAccount($request->input('number'));
		$paymentprofile->printedname = $request->input('printedname');
		$paymentprofile->securenumber = $request->input('securenumber');
		$paymentprofile->expirationdate = $request->input('expirationdate');
		$paymentprofile->users()->associate($userId);

		$paymentprofile->save();

		return redirect('admin/paymentprofiles')->with('message', 'El perfil de pago se ha actualizado correctamente');
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

		$paymentprofile = PaymentProfile::find($id);
		$paymentprofile->delete();

		return redirect()->route('admin.paymentprofiles.index')->with('message', 'Perfil de pago borrado');
	}

}
