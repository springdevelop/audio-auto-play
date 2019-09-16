<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Resources\Api\GroupResource;
use App\Http\Resources\Api\GroupCollection;
use App\Http\Requests\Api\GroupStoreRequest;
use App\Repositories\Contracts\GroupRepositoryInterface;

/**
 * @group groups
 * @authenticated
 *
 * APIs for managing groups
 */
class GroupController extends BaseController
{

    protected $repository;

    public function __construct(GroupRepositoryInterface $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }

    /**
     * index
     * @api {get} /groups Get all list position
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = $this->repository->all();
        return $this->responseSuccess(new GroupCollection($groups));
    }

    /**
     * store
     * @api {post} /groups Create group
     * @bodyParam name string required Name of group
     * @bodyParam desc string required Description of group
     * @bodyParam type string required type of group
     * Store a newly created resource in storage.
     */
    public function store(GroupStoreRequest $request)
    {
        $inputs = $request->only('name', 'desc', 'slug', 'type');
        $group = $this->repository->create($inputs);

        if($group) return $this->responseSuccess(new GroupResource($group));

        return $this->responseErrors(config('code.basic.save_failed'), trans('messages.validate.save_failed')); 
    }

    /**
     * show
     * @api {post} /groups/{id} Get group's detail
     * Display the specified resource.
     */
    public function show($id)
    {
        $group = $this->repository->find($id);
        if($group) return $this->responseSuccess(new GroupResource($group));

        return $this->responseErrors(config('code.position.position_not_found'), trans('messages.position.position_not_found')); 
    }
    

    /**
     * update
     * @api {put} /groups/{id} Update group's detail
     * Update the specified resource in storage.
     *
     * @bodyParam name string required Name of group
     * @bodyParam desc string required Description of group
     * @bodyParam type string required type of group
     */
    public function update(GroupUpdateRequest $request, $id)
    {
        $inputs = $request->only('name', 'desc', 'slug', 'type');
        $group = $this->repository->find($id);

        if($group){
            $updated = $this->repository->update($group, $inputs);
            if ($updated) {
                return $this->responseSuccess(new PositionResource($updated));
            }
        }

        return $this->responseErrors(config('code.basic.save_failed'), trans('messages.validate.save_failed'));
    }

    /**
     * delete
     * @api {delete} /groups/{id} Delete a group
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $group = $this->repository->find($id);
        if($group) 
            $this->repository->destroy($group);
        else
            return $this->responseErrors(config('code.basic.not_found'), trans('messages.validate.not_found'));

        return $this->responseSuccess([]);
    }
}
