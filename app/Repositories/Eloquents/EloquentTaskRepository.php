<?php

namespace App\Repositories\Eloquent;

use App\Models\Task;
use App\Repositories\Contracts\TaskRepository;

class EloquentTaskRepository extends EloquentBaseRepository implements TaskRepository
{
    public function __construct(Task $model)
    {
        parent::__construct($model);
    }
}