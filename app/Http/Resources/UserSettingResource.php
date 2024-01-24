<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserSettingResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'setting' => [
                'id' => $this->setting->id,
                'name' => $this->setting->getTranslations("name"),
                'type' => $this->setting->type
            ],
            'value' => $this->when($this->setting->type === 'select', $this->value),
            'switch' => $this->when($this->setting->type === 'switch', $this->switch)
        ];
    }
}
