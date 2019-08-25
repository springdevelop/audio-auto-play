<?php

namespace App\Repositories\Eloquent;

use App\Models\Group;
use App\Repositories\Contracts\GroupRepository;

class EloquentGroupRepository extends EloquentBaseRepository implements GroupRepository
{
    public function __construct(Group $model)
    {
        parent::__construct($model);
    }
}