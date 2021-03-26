<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
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
        switch ($this->method()){
            case 'POST' :
                return [
                    'name' =>'required|unique:product,name',
                    'price' =>'required|numeric|min:0',
                    'priceSale' =>'nullable|numeric|min:0',
                    'quantity' =>'required|numeric|min:0'
                ];
                break;
            case 'PUT' :
                return [
                    'name' =>'required|unique:product,name,'.$this->id,
                    'price' =>'required|numeric|min:0',
                    'priceSale' =>'nullable|numeric|min:0',
                    'quantity' =>'required|numeric|min:0'
                ];
                break;
        }

    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        switch ($this->method()) {
            //    Hander Post
            case "POST" :
                return [
                    'name.required'=>'The name product not empty!',
                    'price.required'=>'The price not empty!',
                    'name.unique'=>'The name must unique!',
                    'price.numeric' =>'The price must number!',
                    'priceSale.numeric' =>'The price sale must number!',
                    'price.min' =>'The smallest price is 0 !',
                    'priceSale.min' =>'The smallest price is 0 !',
                    'quantity.required'=>'The quantity not empty!',
                    'quantity.numeric' =>'The quantity must number!',
                    'quantity.min' =>'The smallest price is 0 !'
                ];
                break;
            //    Hander Get
            case "PUT" :
                return [
                    'name.required'=>'The name product not empty!',
                    'price.required'=>'The price not empty!',
                    'name.unique'=>'The name must unique!',
                    'price.numeric' =>'The price must number!',
                    'priceSale.numeric' =>'The price sale must number!',
                    'price.min' =>'The smallest price is 0',
                    'priceSale.min' =>'The smallest price is 0 !',
                    'quantity.required'=>'The quantity not empty!',
                    'quantity.numeric' =>'The quantity must number!',
                    'quantity.min' =>'The smallest price is 0 !'
                ];
                break;
        }
    }
}
