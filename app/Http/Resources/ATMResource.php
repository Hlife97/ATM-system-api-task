<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ATMResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'message' => $this->resource['message'],
            'remaining_balance' => $this->resource['remaining_balance'],
            'denominations' => $this->resource['denominations'],
        ];
    }
}
