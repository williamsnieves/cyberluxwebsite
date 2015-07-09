<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class PaymentValidationRequest extends Request {

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
	        'name.required' => 'Debes ingresar el nombre del metodo de pago',	       
	    ];
	}

}
