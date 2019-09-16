<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Resources\Api\DeviceResource;
use App\Http\Resources\Api\DeviceCollection;
use App\Http\Requests\Api\DeviceStoreRequest;
use App\Repositories\Contracts\DeviceRepositoryInterface;

/**
 * @group devices
 * @authenticated
 *
 * APIs for managing devices
 */
class DeviceController extends BaseController
{

    protected $repository;

    public function __construct(DeviceRepositoryInterface $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }

    /**
     * index
     * @api {get} /devices Get all list position
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devices = $this->repository->all();
        return $this->responseSuccess(new DeviceCollection($devices));
    }

    /**
     * store
     * @api {post} /devices Create device
     * @bodyParam name string required Name of device
     * @bodyParam desc string required Description of device
     * @bodyParam positions_id integer required positions_id of device
     * @bodyParam users_id integer required users_id of device
     * @bodyParam groups_id integer required groups_id of device
     * Store a newly created resource in storage.
     */
    public function store(DeviceStoreRequest $request)
    {
        $inputs = $request->only('name', 'desc', 'positions_id', 'groups_id');
        $device = $this->repository->create(array_merge([
            'users_id' => 1
        ],$inputs));

        if($device) return $this->responseSuccess(new DeviceResource($device));

        return $this->responseErrors(config('code.basic.save_failed'), trans('messages.validate.save_failed')); 
    }

    /**
     * show
     * @api {post} /devices/{id} Get device's detail
     * Display the specified resource.
     */
    public function show($id)
    {
        $device = $this->repository->find($id);
        if($device) return $this->responseSuccess(new DeviceResource($device));

        return $this->responseErrors(config('code.devices.device_not_found'), trans('messages.devices.device_not_found')); 
    }
    

    /**
     * update
     * @api {put} /devices/{id} Update device's detail
     * Update the specified resource in storage.
     *
     * @bodyParam parent_id string required id of parent's device
     * @bodyParam name string required Name of device
     * @bodyParam desc string required Description of device
     * @bodyParam groups_id integer required groups_id of deivce
     */
    public function update(DeviceUpdateRequest $request, $id)
    {
        $inputs = $request->only('name', 'desc', 'positions_id', 'groups_id');
        $device = $this->repository->find($id);

        if($device){
            $updated = $this->repository->update($device, $inputs);
            if ($updated) {
                return $this->responseSuccess(new DeviceResource($updated));
            }
        }

        return $this->responseErrors(config('code.basic.save_failed'), trans('messages.validate.save_failed'));
    }

    /**
     * delete
     * @api {delete} /devices/{id} Delete a device
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $device = $this->repository->find($id);
        if($device) 
            $this->repository->destroy($device);
        else
            return $this->responseErrors(config('code.basic.not_found'), trans('messages.validate.not_found'));

        return $this->responseSuccess([]);
    }
}
