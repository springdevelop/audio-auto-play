<?php

namespace App\Repositories\Eloquent;

use App\Models\Trouble;
use App\Repositories\Contracts\TroubleRepository;

class EloquentTroubleRepository extends EloquentBaseRepository implements TroubleRepository
{
    public function __construct(Trouble $model)
    {
        parent::__construct($model);
    }
}