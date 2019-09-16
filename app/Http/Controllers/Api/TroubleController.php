<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Resources\Api\TroubleResource;
use App\Http\Resources\Api\TroubleCollection;
use App\Http\Requests\Api\TroubleStoreRequest;
use App\Http\Requests\Api\TroubleUpdateRequest;
use App\Repositories\Contracts\TroubleRepositoryInterface;

/**
 * @group troubles
 * @authenticated
 *
 * APIs for managing troubles
 */
class TroubleController extends BaseController
{

    protected $repository;

    public function __construct(TroubleRepositoryInterface $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }

    /**
     * index
     * @api {get} /troubles Get all list trouble
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $troubles = $this->repository->all();
        return $this->responseSuccess(new TroubleCollection($troubles));
    }

    /**
     * store
     * @api {post} /troubles Create trouble
     * @bodyParam name string required Name of trouble
     * @bodyParam desc string required Description of trouble
     * @bodyParam devices_id integer required devices_id of trouble
     */
    public function store(TroubleStoreRequest $request)
    {
        $inputs = $request->only('name', 'desc', 'devices_id');
        $trouble = $this->repository->create($inputs);

        if($trouble) return $this->responseSuccess(new TroubleResource($trouble));

        return $this->responseErrors(config('code.basic.save_failed'), trans('messages.validate.save_failed')); 
    }

    /**
     * show
     * @api {post} /troubles/{id} Get trouble's detail
     * Display the specified resource.
     */
    public function show($id)
    {
        $trouble = $this->repository->find($id);
        if($trouble) return $this->responseSuccess(new TroubleResource($trouble));

        return $this->responseErrors(config('code.troubles.trouble_not_found'), trans('messages.troubles.trouble_not_found')); 
    }
    

    /**
     * update
     * @api {put} /troubles/{id} Update trouble's detail
     * Update the specified resource in storage.
     * @bodyParam name string required Name of trouble
     * @bodyParam desc string required Description of trouble
     * @bodyParam devices_id integer required devices_id of trouble
     */
    public function update(TroubleUpdateRequest $request, $id)
    {
        $inputs = $request->only('name', 'desc', 'devices_id');
        $trouble = $this->repository->find($id);

        if($trouble){
            $updated = $this->repository->update($trouble, $inputs);
            if ($updated) {
                return $this->responseSuccess(new TroubleResource($updated));
            }
        }

        return $this->responseErrors(config('code.basic.save_failed'), trans('messages.validate.save_failed'));
    }

    /**
     * delete
     * @api {delete} /troubles/{id} Delete a trouble
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $trouble = $this->repository->find($id);
        if($trouble) 
            $this->repository->destroy($trouble);
        else
            return $this->responseErrors(config('code.basic.not_found'), trans('messages.validate.not_found'));

        return $this->responseSuccess([]);
    }
}
