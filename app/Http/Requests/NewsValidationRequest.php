<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class NewsValidationRequest extends Request {

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
		    'title' => 'required',
		    'summary' => 'required',
		    'description' => 'required',	   
		  ];
	}

	public function messages()
	{
	    return [
	        'title.required' => 'Debes ingresar el título de la noticia',	        
	        'summary.required' => 'Debes ingresar el sumario o resumen',	               
	        'description.required' => 'Debes ingresar la descripción de la noticia',	        
	    ];
	}

}
