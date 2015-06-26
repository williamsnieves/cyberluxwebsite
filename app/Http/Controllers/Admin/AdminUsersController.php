<?php namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\EditorForm;
use App\Http\Controllers\Controller;

use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

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

		//return "pupu";
		$users = User::paginate(10)->setPath('/admin/editors');
		//$users = User::simplePaginate(1);
		return view('admin.editors_show')->with('users', $users);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('admin.editors_createupdate');
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
		$user->password = $request->input('password');
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

		//$user->create($request->all());


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
		$user = User::find($id);
		return view('admin.editors_createupdate')->with('user', $user);

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
		$user = User::find($id);
		$user->name = $request->input('name');
		$user->lastName = $request->input('lastname');
		$user->email = $request->input('email');

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

		return redirect()->route('admin.editors.edit', ['user' => $id])->with('message', 'Usuario actualizado');


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

		$user = User::find($id);
		$user->delete();

		return redirect()->route('admin.editors.index')->with('message', 'Usuario borrado');


	}

}
