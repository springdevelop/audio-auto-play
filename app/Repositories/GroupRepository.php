<?php

namespace App\Repositories;

use App\Models\Group;
use App\Repositories\Contracts\GroupRepositoryInterface;

class GroupRepository extends BaseRepository implements GroupRepositoryInterface
{
    public function __construct(Group $model)
    {
        parent::__construct($model);
    }
}