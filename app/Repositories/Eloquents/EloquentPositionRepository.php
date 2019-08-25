<?php

namespace App\Repositories\Eloquent;

use App\Models\Position;
use App\Repositories\Contracts\PositionRepository;

class EloquentPositionRepository extends EloquentBaseRepository implements PositionRepository
{
    public function __construct(Position $model)
    {
        parent::__construct($model);
    }
}