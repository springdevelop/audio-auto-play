<?php

namespace App\Repositories;

use App\Models\SiteInfo;
use App\Repositories\Contracts\SiteInfoRepositoryInterface;

class SiteInfoRepository extends BaseRepository implements SiteInfoRepositoryInterface
{
    public function __construct(SiteInfo $model)
    {
        parent::__construct($model);
    }
}