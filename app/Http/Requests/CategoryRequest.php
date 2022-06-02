<?php

namespace App\Http\Requests;


class CategoryRequest extends BaseRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|string|min:3|max:255',
            'code' => 'required|string|min:3|max:255|unique:categories,code,' . $this->id,
            'category_id' => 'required|numeric|exists:categories,id',
        ];
    }
}
