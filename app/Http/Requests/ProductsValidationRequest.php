<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductsValidationRequest extends Request {

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
		    'codproduct' => 'required',		        	    	   
		  ];
	}

	public function messages()
	{
	    return [
	        'name.required' => 'Debes colocar el nombre del producto',
	        'codproduct.required' => 'Debes colocar el codigo del producto',
	    ];
	}

}
