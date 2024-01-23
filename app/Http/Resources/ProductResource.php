<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{

    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'category' => new CategoryResource($this->category),
            'name' => $this->getTranslations('name'),
            'description' => $this->getTranslations('description'),
            'price' => $this->price,
            'inventory' => StockResource::collection($this->stocks),
            'created_at' => $this->created_at?->format('Y-m-d H:i:s'),
            'updated_at' => $this->updated_at?->format('y-m-d H:i:s'),
            'order_quantity' => $this->when(isset($this->quantity), $this->quantity),
        ];
    }
}
