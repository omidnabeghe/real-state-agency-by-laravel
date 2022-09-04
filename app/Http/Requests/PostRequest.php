<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            return [
                'title' => 'required|max:120|min:2',
                'published_at' => 'required|date',
                'image' => 'required|image|mimes:png,jpg,jpeg,gif',
                'cat_id' => 'required',
                'body' => 'required|max:10000|min:5',
            ];
        }
        else{
            return [
                'title' => 'required|max:120|min:2',
                'published_at' => 'required|date',
                'image' => 'image|mimes:png,jpg,jpeg,gif',
                'cat_id' => 'required',
                'body' => 'required|max:10000|min:5',
            ];
        }
    }
}
