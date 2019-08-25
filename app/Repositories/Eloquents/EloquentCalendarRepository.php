<?php

namespace App\Repositories\Eloquent;

use App\Models\Calendar;
use App\Repositories\Contracts\CalendarRepository;

class EloquentCalendarRepository extends EloquentBaseRepository implements CalendarRepository
{
    public function __construct(Calendar $model)
    {
        parent::__construct($model);
    }
}