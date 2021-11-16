<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest​ extends FormRequest
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
        return [
            'category_id' => 'required',
            
            'title' => 'bail|required|unique:posts|min:5|max:100',
            'slug' => 'bail|required|unique:posts|min:3|max:100',
            'content' => 'bail|required|min:20|max:10000',
            
        ];
    }
}
