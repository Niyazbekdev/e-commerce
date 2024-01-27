<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductImageRequest extends FormRequest
{
    public function authorize(): bool
    {
        return request()->user()->can('product:create');
    }

    public function rules(): array
    {
        return [
            'images.*' => 'required|file|mimes:jpg,bmp,png|max:1024'
        ];
    }
}
