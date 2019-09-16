<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Resources\Api\PositionResource;
use App\Http\Resources\Api\PositionCollection;
use App\Http\Requests\Api\PositionStoreRequest;
use App\Repositories\Contracts\PositionRepositoryInterface;

/**
 * @group positions
 * @authenticated
 *
 * APIs for managing positions
 */
class PositionController extends BaseController
{

    protected $repository;

    public function __construct(PositionRepositoryInterface $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }

    /**
     * index
     * @api {get} /positions Get all list position
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PositionRepositoryInterface $repository)
    {
        $positions = $this->repository->all();
        return $this->responseSuccess(new PositionCollection($positions));
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
        $position = $this->repository->create(array_merge([
            'users_id' => 1
        ],$inputs));

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
        $position = $this->repository->find($id);
        if($position) return $this->responseSuccess(new PositionResource($position));

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
    public function update(PositionUpdateRequest $request, $id)
    {
        $inputs = $request->only('name', 'desc', 'groups_id');
        $position = $this->repository->find($id);

        if($position){
            $updated = $this->repository->update($position, $inputs);
            if ($updated) {
                return $this->responseSuccess(new PositionResource($updated));
            }
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
        $position = $this->repository->find($id);
        if($position) 
            $this->repository->destroy($position);
        else
            return $this->responseErrors(config('code.basic.not_found'), trans('messages.validate.not_found'));

        return $this->responseSuccess([]);
    }
}
