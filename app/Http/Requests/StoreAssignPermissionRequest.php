<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAssignPermissionRequest extends FormRequest
{
    public function authorize(): bool
    {
        return auth()->user()->can('permission:assign');
    }

    public function rules(): array
    {
        return [
            'permission_id' => 'required',
            'role_id' => 'required',
        ];
    }
}
