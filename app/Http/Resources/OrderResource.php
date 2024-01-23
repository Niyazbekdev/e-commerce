<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'comment' => $this->comment,
            'sum' => $this->sum,
            'user' => $this->user,
            'status' => $this->status,
            'products' => $this->products,
            'address' => $this->address,
            'paymentType' => $this->paymentType,
            'deliveryMethod' => $this->deliveryMethod,
        ];
    }
}
