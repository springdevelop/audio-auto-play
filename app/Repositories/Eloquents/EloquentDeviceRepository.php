<?php

namespace App\Repositories\Eloquent;

use App\Models\Device;
use App\Repositories\Contracts\DeviceRepository;

class EloquentDeviceRepository extends EloquentBaseRepository implements DeviceRepository
{
    public function __construct(Device $model)
    {
        parent::__construct($model);
    }
}