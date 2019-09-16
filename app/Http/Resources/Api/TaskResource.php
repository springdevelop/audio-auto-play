<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
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
            'time_from' => $this->time_from,
            'time_to' => $this->time_to,
            'status' => $this->users_id,
            'users_id' => $this->users_id,
            'troubles_id' => $this->troubles_id,
        ];
    }
}
