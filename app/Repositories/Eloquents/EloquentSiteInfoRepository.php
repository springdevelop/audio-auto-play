<?php

namespace App\Repositories\Eloquent;

use App\Models\SiteInfo;
use App\Repositories\Contracts\SiteInfoRepository;

class EloquentSiteInfoRepository extends EloquentBaseRepository implements SiteInfoRepository
{
    public function __construct(SiteInfo $model)
    {
        parent::__construct($model);
    }
}