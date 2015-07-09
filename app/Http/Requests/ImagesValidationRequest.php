<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ImagesValidationRequest extends Request {

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
		    'name' => 'required',		    	    	   
		  ];
	}

	public function messages()
	{
	    return [
	        'name.required' => 'Debes colocar un nombre de imagen y debe ser el mismo nombre de la imagen que vas a subir',	                        
	    ];
	}

}
