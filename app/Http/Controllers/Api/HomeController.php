<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Repositories\Contracts\DeviceRepositoryInterface;
use App\Services\Api\Contracts\AzuracastServiceInterface;

/**
 * @group home
 * @authenticated
 *
 * APIs for managing devices
 */
class HomeController extends BaseController
{

    protected $repository;

    protected $service;

    public function __construct(DeviceRepositoryInterface $repository, AzuracastServiceInterface $service)
    {
        parent::__construct();
        $this->repository = $repository;
        $this->service = $service;
    }
    /**
     * audio
     * @get /audio/{code}
     */
    public function audio($code){
        $device = $this->repository->findByAttributes(array(
            'code' => $code
        ));
        if(!$device){
            return $this->responseErrors(config('code.basic.not_found'), trans('messages.validate.not_found'));
        }
        return $this->service->getAudioByStationId($device->position->station_id);
    }
}
