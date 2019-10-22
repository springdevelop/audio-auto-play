<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Resources\Api\PositionResource;
use App\Http\Resources\Api\DeviceCollection;
use App\Http\Resources\Api\PositionCollection;
use App\Http\Requests\Api\PositionStoreRequest;
use App\Http\Requests\Api\PositionUpdateRequest;
use App\Repositories\Contracts\PositionRepositoryInterface;
use App\Services\Api\Contracts\PositionServiceInterface;
use App\Models\Position;
use App\Models\User;
use App\Services\Api\Values\ApiParam;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

/**
 * @group positions
 * @authenticated
 *
 * APIs for managing positions
 */
class PositionController extends BaseController
{
    protected $service;

    public function __construct(PositionServiceInterface $service)
    {
        parent::__construct();
        $this->service = $service;
    }

    /**
     * tree
     * @api {get} /tree Get all list position
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tree(PositionRepositoryInterface $repository)
    {
        return api_success($repository->all());
    }

    /**
     * index
     * @api {get} /positions Get all list position
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $apiParam = new ApiParam(
            $request->query(),
            $request->url(),
            $this->service
        );
        return $this->service->getList($apiParam);
    }

    /**
     * store
     * @api {post} /positions Create position
     * @bodyParam parent_id string required id of parent's position
     * @bodyParam name string required Name of position
     * @bodyParam desc string required Description of position
     * @bodyParam groups_id integer required groups_id of position
     * Store a newly created resource in storage.
     */
    public function store(PositionStoreRequest $request)
    {
        $inputs = $request->only('parent_id', 'name', 'desc', 'groups_id');
        $position = $this->service->create(array_merge($inputs));

        if($position) return $this->responseSuccess(new PositionResource($position));

        return $this->responseErrors(config('code.basic.save_failed'), trans('messages.validate.save_failed')); 
    }

    /**
     * show
     * @api {post} /positions/{id} Get position's detail
     * Display the specified resource.
     */
    public function show($id)
    {
        $rs = $this->service->getDetail($id);
        if($rs['data'])
            return $rs;

        return $this->responseErrors(config('code.position.position_not_found'), trans('messages.position.position_not_found')); 
    }
    

    /**
     * update
     * @api {put} /positions/{id} Update position's detail
     * Update the specified resource in storage.
     *
     * @bodyParam parent_id string required id of parent's position
     * @bodyParam name string required Name of position
     * @bodyParam desc string required Description of position
     * @bodyParam groups_id integer required groups_id of position
     */
    public function update(PositionUpdateRequest $request, $position)
    {
        $inputs = $request->only('name', 'desc', 'groups_id');
        $position = $this->service->update($position, $inputs);

        if ($updated) {
            return $this->responseSuccess(new PositionResource($updated));
        }

        return $this->responseErrors(config('code.basic.save_failed'), trans('messages.validate.save_failed'));
    }

    /**
     * delete
     * @api {delete} /positions/{id} Delete a position
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $bool = $this->service->delete($id);
        if(!$bool) 
            return $this->responseErrors(config('code.basic.not_found'), trans('messages.validate.not_found'));

        return $this->responseSuccess([]);
    }

    /**
     * devices
     * @api {get} /positions/{id}/devices Get all devices's a position
     * Display the specified resource.
     */
    public function devices($positionId)
    {
        return $this->service->devices($positionId);
    }
}
