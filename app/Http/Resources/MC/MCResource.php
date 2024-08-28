<?php

namespace App\Http\Resources\MC;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MCResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'parent_name' => $this->parent_name,
            'parent_phone' => $this->parent_phone,
            'child_name' => $this->child_name,
            'child_age' => $this->child_age,
            'comment' => $this->comment,
        ];
    }
}
