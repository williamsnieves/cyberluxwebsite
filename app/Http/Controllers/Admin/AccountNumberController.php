<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\PaymentMethod;

use App\Models\AccountNumber;

class AccountNumberController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$bankaccounts = AccountNumber::paginate(10)->setPath('/admin/bankaccounts');
		//$users = User::simplePaginate(1);
		return view('admin.accounts_show')->with('bankaccounts', $bankaccounts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//

		$paymentmethods = PaymentMethod::lists('name', 'id');		
		
		//print_r($thumbs);
		return view('admin.accounts_createupdate')->with(array('paymentmethods' => $paymentmethods));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$paymentmethodsId = PaymentMethod::find($request->input('payments'));
		$accountnumber = new AccountNumber;
		$accountnumber->number = $request->input('number');
		//$accountnumber->encryptAccount($request->input('number'));
		$accountnumber->bank = $request->input('bank');
		$accountnumber->type = $request->input('type');
		$accountnumber->consideration = $request->input('consideration');
		$accountnumber->paymentMethods()->associate($paymentmethodsId);

		$accountnumber->save();

		return redirect('admin/bankaccounts')->with('message', 'El numero de cuenta se ha creado correctamente');
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
		$paymentmethods = PaymentMethod::lists('name', 'id');
		$accountnumber = AccountNumber::find($id);
		//$accountnumber->number = $accountnumber->decryptAccount($accountnumber->number);		
		return view('admin.accounts_createupdate')->with(array('accountnumber' => $accountnumber ,'paymentmethods' => $paymentmethods));
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
		$paymentmethodsId = PaymentMethod::find($request->input('payments'));
		$accountnumber = AccountNumber::find($id);
		$accountnumber->number = $request->input('number');
		$accountnumber->bank = $request->input('bank');
		$accountnumber->type = $request->input('type');
		$accountnumber->consideration = $request->input('consideration');
		$accountnumber->paymentMethods()->associate($paymentmethodsId);

		$accountnumber->save();

		return redirect('admin/bankaccounts')->with('message', 'El numero de cuenta se ha actualizado correctamente');
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
		$accountnumber = AccountNumber::find($id);
		$accountnumber->delete();

		return redirect()->route('admin.bankaccounts.index')->with('message', 'Numero de cuenta borrado');
	}

}
