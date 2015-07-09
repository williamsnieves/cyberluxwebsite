<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductDetailValidationRequest extends Request {

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
		    'features' => 'required',		           	    	   
		  ];
	}

	public function messages()
	{
	    return [
	        'features.required' => 'Debes colocar las características generales del producto',	       
	    ];
	}

}
