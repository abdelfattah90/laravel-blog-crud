<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PostUpdateRequest​ extends FormRequest
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
        $slug = $this->request->get('slug');

        return [
            'category_id' => 'required',
            'title' => ['bail', 'required', 'min:5', 'max:100'],
            'slug' => ['required',  Rule::unique('posts', 'slug')->ignore($slug, 'slug'),],
            'content' => 'bail|required|min:20|max:10000',
        ];
    }
}

       //, 'min:5', 'max:100', 
//  if ($this->request->get('slug') != $this->post->get('slug')) { }