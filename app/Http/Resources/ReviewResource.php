<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReviewResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'rating' => $this->rating,
            'body' => $this->body,
            'product_id' => $this->product_id,
            'user' => $this->user,
            'created_at' => $this->created_at?->format('Y-m-d H:i:s')
        ];
    }
}