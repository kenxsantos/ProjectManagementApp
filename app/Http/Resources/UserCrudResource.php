<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserCrudResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public static $wrap = false;
    
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'created_at' => (new Carbon($this->created_at))->format('Y-m-d'),
            'updated_at' => (new Carbon($this->updated_at))->format('Y-m-d'),
            'email_verified_at' => $this->email_verified_at ? (new Carbon($this->email_verified_at))->format('Y-m-d H:m:s') : null,
        ];
    }
}
