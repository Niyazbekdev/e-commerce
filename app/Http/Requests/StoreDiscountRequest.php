<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDiscountRequest extends FormRequest
{
    public function authorize(): bool
    {
        // TODO ad permission managment
        return true;
    }

    public function rules(): array
    {
        return [
            'product_id' => 'required|exists:products,id',
            'name' => 'string|nullable',
            'percent' => 'required_without:sum',
            'sum' => 'required_without:percent',
            'from' => 'nullable',
            'to' => 'nullable'
        ];
    }
}
