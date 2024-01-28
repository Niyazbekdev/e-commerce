<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class StorePermissionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->user()->can('permission:create');
    }

    public function rules(): array
    {
        return [
            'name' => 'required'
        ];
    }
}
