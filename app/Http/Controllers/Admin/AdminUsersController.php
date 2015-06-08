<?php namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\EditorForm;
use App\Http\Controllers\Controller;

use App\Models\User;
class AdminUsersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//

		return "pupu";
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('admin.editors');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//

		$user = new User;
		$user->name = $request->input('name');
		$user->lastName = $request->input('lastname');
		$user->email = $request->input('email');
		$user->password = $user->set_password($request->input('password'));
		$user->set_password($user->password);

		if(!empty($request->input('editor')) && $request->input('editor')  == 'on'){
			$user->isEditor = 1;
		}else{
			$user->isEditor = 0;
		}

		if(!empty($request->input('admin')) && $request->input('admin')  == 'on'){
			$user->isAdmin = 1;
		}else{
			$user->isAdmin = 0;
		}

		$user->save();

		return redirect('admin/editors/create')->with('message', 'El editor se ha creado correctamente');
		
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
