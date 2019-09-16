<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class DeviceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'desc' => $this->desc,
            'slug' => $this->users_id,
            'positions_id' => $this->positions_id,
            'users_id' => $this->users_id,
            'groups_id' => $this->groups_id,
            'status' => $this->status,
        ];
    }
}
