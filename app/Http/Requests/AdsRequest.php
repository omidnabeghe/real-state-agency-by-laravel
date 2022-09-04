<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdsRequest extends FormRequest
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
        if($this->isMethod('post')){
            return  [
                'title' => 'required|max:191',
                'description' => 'required||max:1000',
                'address' => 'required|max:191',
                'amount' => 'required|max:191',
                'image' => 'required|image|mimes:jpeg,jpg,png,git',
                'floor' => 'required|max:191',
                'year' => 'required|numeric',
                'area'=>'numeric',
                'storeroom' => 'required|numeric',
                'balcony' => 'required|numeric',
                'room' => 'required|numeric',
                'parking' => 'required|numeric',
                'toilet' => 'required|max:191',
                'tag' => 'required|max:191',
                'cat_id' => 'required|exists:categories,id',
                'sell_status' => 'required|numeric',
                'type' => 'required|numeric',
            ];
            }
            else{
                return  [
                    'title' => 'required|max:191',
                    'description' => 'required||max:1000',
                    'address' => 'required|max:191',
                    'amount' => 'required|max:191',
                    'image' => 'image|mimes:jpeg,jpg,png,git',
                    'floor' => 'required|max:191',
                    'area'=>'numeric',
                    'year' => 'required|numeric',
                    'storeroom' => 'required|numeric',
                    'balcony' => 'required|numeric',
                    'room' => 'required|numeric',
                    'parking' => 'required|numeric',
                    'toilet' => 'required|max:191',
                    'tag' => 'required|max:191',
                    'cat_id' => 'required|exists:categories,id',
                    'sell_status' => 'required|numeric',
                    'type' => 'required|numeric',
                    ];
            }
    }
}
