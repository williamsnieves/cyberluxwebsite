<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class EditorValidationRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
		    'name' => 'required|alpha',
		    'lastname' => 'required|alpha',
		    'email' => 'required|email',
		    'password' => 'required',
		    'editor' => 'required',		   
		  ];
	}

	public function messages()
	{
	    return [
	        'name.required' => 'Debes ingresar el nombre',
	        'name.alpha' => 'Debes ingresar solo letras en el campo nombre',
	        'lastname.required' => 'Debes ingresar el apellido',
	        'lastname.alpha' => 'Debes ingresar solo letras en el campo nombre',
	        'email.required' => 'Debes ingresar tu correo',
	        'email.email' => 'Debes ingresar un correo valido',
	        'password.required' => 'Debes ingresar un password generico',
	        'editor.required' => 'Debes marcar la opcion editor',
	    ];
	}

}
