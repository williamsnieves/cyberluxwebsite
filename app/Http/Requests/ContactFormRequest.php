<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactFormRequest extends Request {

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
		    'email' => 'required|email',
		    'message' => 'required',
		  ];
	}

	public function messages()
	{
	    return [
	        'name.required' => 'Debes ingresar tu nombre',
	        'name.alpha' => 'Debes ingresar solo letras en el campo nombre',
	        'email.required' => 'Debes ingresar tu correo',
	        'email.email' => 'Debes ingresar un correo valido',
	        'message.required' => 'Debes ingresar tu mensaje',
	    ];
	}

}
