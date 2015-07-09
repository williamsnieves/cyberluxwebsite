<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class PagesValidationRequest extends Request {

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
		    'name' => 'required | alpha',
		    'title' => 'required | alpha',
		    'content' => 'required',	   
		  ];
	}

	public function messages()
	{
	    return [
	        'name.required' => 'Debes ingresar el nombre que tendra la sección dentro del sistema',	        
	        'title.required' => 'Debes ingresar el título que tendra la sección en el site',	               
	        'content.required' => 'Debes ingresar el contenido de la sección',	        
	    ];
	}

}
