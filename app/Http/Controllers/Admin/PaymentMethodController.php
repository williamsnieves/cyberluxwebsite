<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


use App\Models\PaymentMethod;
use App\Http\Requests\PaymentValidationRequest;
class PaymentMethodController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$payments = PaymentMethod::paginate(10)->setPath('/admin/paymentmethods');
		//$users = User::simplePaginate(1);
		return view('admin.payments_show')->with('payments', $payments);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//		
		//print_r($thumbs);
		return view('admin.payments_createupdate');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(PaymentValidationRequest $request)
	{
		//	
		
		$paymentmethods = new PaymentMethod;
		$paymentmethods->name = $request->input('name');

		$paymentmethods->save();

		return redirect('admin/paymentmethods')->with('message', 'El metodo de pago se ha creado correctamente');
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

		$paymentmethods = PaymentMethod::find($id);			
		return view('admin.payments_createupdate')->with(array('paymentmethods' => $paymentmethods));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, PaymentValidationRequest $request)
	{
		//

		$paymentmethods = PaymentMethod::find($id);
		$paymentmethods->name = $request->input('name');

		$paymentmethods->save();

		return redirect('admin/paymentmethods')->with('message', 'El metodo de pago se ha actualizado correctamente');
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
		$paymentmethods =  PaymentMethod::find($id);
		$paymentmethods->delete();

		return redirect()->route('admin.paymentmethods.index')->with('message', 'Metodo de pago borrado');
	}

}
