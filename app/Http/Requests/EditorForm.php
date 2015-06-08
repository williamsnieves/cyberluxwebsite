<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class EditorForm extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return false;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			"name"    =>    "required|min:5|max:45",
			"lastname"	   =>    "required|min:5|max:45",
			"email"	   =>    "required|min:5|max:80",
			"password"	   =>    "required|min:5|max:80",
		];
	}

	public function messages()
	{
	    return [
	        'name.required' => 'El campo nombre es requerido!',
	        'name.min' => 'El campo nombre no puede tener menos de 5 carácteres',
			'name.max' => 'El campo nombre no puede tener más de 45 carácteres',
			'lastname.required' => 'El campo apellido es requerido!',
	        'lastname.min' => 'El campo apellido no puede tener menos de 5 carácteres',
			'lastname.max' => 'El campo apellido no puede tener más de 45 carácteres',
			'email.required' => 'El campo email es requerido!',
	        'email.min' => 'El campo email no puede tener menos de 5 carácteres',
			'email.max' => 'El campo email no puede tener más de 80 carácteres',
			'password.required' => 'El campo password es requerido!',
	        'password.min' => 'El campo password no puede tener menos de 5 carácteres',
			'password.max' => 'El campo password no puede tener más de 80 carácteres',

	    ];
	}

}
