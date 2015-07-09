<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class NodesValidationRequest extends Request {

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
		    'name' => 'required|alpha_dash',
		    'title' => 'required',
		    'content' => 'required',		    	   
		  ];
	}

	public function messages()
	{
	    return [
	        'name.required' => 'Debes ingresar el nombre que tendra el nodo dentro del sistema',
	        'name.alpha_dash' => 'Debes ingresar solo letras y evitar los espacios usa  _ o #',	        
	        'title.required' => 'Debes ingresar el título que tendra el nodo en la página',	               
	        'content.required' => 'Debes ingresar el contenido del nodo',	                
	    ];
	}

}
