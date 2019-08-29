<?php

namespace App\Repositories;

use App\Models\Trouble;
use App\Repositories\Contracts\TroubleRepositoryInterface;

class TroubleRepository extends BaseRepository implements TroubleRepositoryInterface
{
    public function __construct(Trouble $model)
    {
        parent::__construct($model);
    }
}