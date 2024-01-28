<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        if($this->getDiscount()){
            if ($this->discount->sum){
                $dicountedPrice = $this->price - $this->discount->sum;
            }else if($this->discount->percent){
                $dicountedPrice = round($this->price * ((100 - $this->discount->percent) / 100));
            }
        }
        return [
            'id' => $this->id,
            'category' => new CategoryResource($this->category),
            'name' => $this->getTranslations('name'),
            'description' => $this->when($request->routeIs('products.show'), $this->getTranslations('description')),
            'price' => $this->price,
            'inventory' => StockResource::collection($this->stocks),
            'created_at' => $this->created_at?->format('Y-m-d H:i:s'),
            'updated_at' => $this->updated_at?->format('Y-m-d H:i:s'),
            'order_quantity' => $this->when(isset($this->quantity), $this->quantity),
            'images' => ImageResource::collection($this->images),
            'discount' => $this->getDiscount(),
            'discounted_price' => $dicountedPrice ?? null
        ];
    }
}
