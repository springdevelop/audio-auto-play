<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class CalendarResource extends JsonResource
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
            'audio' => $this->audio,
            'time_from' => $this->time_from,
            'time_to' => $this->time_to,
            'positions_id' => $this->positions_id,
            'users_id' => $this->users_id,
            'status' => $this->status,
        ];
    }
}
