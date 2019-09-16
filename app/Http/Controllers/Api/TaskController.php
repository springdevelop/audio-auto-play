<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Resources\Api\TaskResource;
use App\Http\Resources\Api\TaskCollection;
use App\Http\Requests\Api\TaskStoreRequest;
use App\Repositories\Contracts\TaskRepositoryInterface;

/**
 * @group tasks
 * @authenticated
 *
 * APIs for managing tasks
 */
class TaskController extends BaseController
{

    protected $repository;

    public function __construct(TaskRepositoryInterface $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }

    /**
     * index
     * @api {get} /tasks Get all list task
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = $this->repository->all();
        return $this->responseSuccess(new TaskCollection($tasks));
    }

    /**
     * store
     * @api {post} /tasks Create task
     * @bodyParam name string required Name of task
     * @bodyParam desc string required Description of task
     * @bodyParam time_from string required time from of task
     * @bodyParam time_to integer required time to of task
     * @bodyParam status string required status of task
     * @bodyParam users_id integer required users_id of task
     * @bodyParam troubles_id integer required troubles_id of task
     * Store a newly created resource in storage.
     */
    public function store(TaskStoreRequest $request)
    {
        $inputs = $request->only('name', 'desc', 'time_from', 'time_to', 'status', 'users_id', 'troubles_id');
        $task = $this->repository->create($inputs);

        if($task) return $this->responseSuccess(new TaskResource($task));

        return $this->responseErrors(config('code.basic.save_failed'), trans('messages.validate.save_failed')); 
    }

    /**
     * show
     * @api {post} /tasks/{id} Get device's task
     * Display the specified resource.
     */
    public function show($id)
    {
        $task = $this->repository->find($id);
        if($task) return $this->responseSuccess(new TaskResource($task));

        return $this->responseErrors(config('code.devices.device_not_found'), trans('messages.devices.device_not_found')); 
    }
    

    /**
     * update
     * @api {put} /tasks/{id} Update device's detail
     * Update the specified resource in storage.
     *
     * @bodyParam name string required Name of task
     * @bodyParam desc string required Description of task
     * @bodyParam time_from string required time from of task
     * @bodyParam time_to integer required time to of task
     * @bodyParam status string required status of task
     * @bodyParam users_id integer required users_id of task
     * @bodyParam troubles_id integer required troubles_id of task
     */
    public function update(TaskUpdateRequest $request, $id)
    {
        $inputs = $request->only('name', 'desc', 'time_from', 'time_to', 'status', 'users_id', 'troubles_id');
        $task = $this->repository->find($id);

        if($task){
            $updated = $this->repository->update($task, $inputs);
            if ($updated) {
                return $this->responseSuccess(new TaskResource($updated));
            }
        }

        return $this->responseErrors(config('code.basic.save_failed'), trans('messages.validate.save_failed'));
    }

    /**
     * delete
     * @api {delete} /tasks/{id} Delete a task
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $task = $this->repository->find($id);
        if($task) 
            $this->repository->destroy($task);
        else
            return $this->responseErrors(config('code.basic.not_found'), trans('messages.validate.not_found'));

        return $this->responseSuccess([]);
    }
}
