<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Resources\Api\CalendarResource;
use App\Http\Resources\Api\CalendarCollection;
use App\Http\Requests\Api\CalendarStoreRequest;
use App\Http\Requests\Api\CalendarUpdateRequest;
use App\Repositories\Contracts\CalendarRepositoryInterface;

/**
 * @group calendars
 * @authenticated
 *
 * APIs for managing calendars
 */
class CalendarController extends BaseController
{

    protected $repository;

    public function __construct(CalendarRepositoryInterface $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }

    /**
     * index
     * @api {get} /calendars Get all list calendar
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calendars = $this->repository->all();
        return $this->responseSuccess(new CalendarCollection($calendars));
    }

    /**
     * store
     * @api {post} /calendars Create calendar
     * @bodyParam name string required Name of calendar
     * @bodyParam desc string required Description of calendar
     * @bodyParam audio string required audio of calendar
     * @bodyParam time_from string required time from of calendar
     * @bodyParam time_to string required time to of calendar
     * @bodyParam positions_id string required positions_id of calendar
     * @bodyParam status string required status of calendar
     * Store a newly created resource in storage.
     */
    public function store(PositionStoreRequest $request)
    {
        $inputs = $request->only('name', 'desc', 'audio', 'time_from', 'time_to', 'positions_id', 'status');
        $calendar = $this->repository->create(array_merge([
            'users_id' => 1
        ],$inputs));

        if($calendar) return $this->responseSuccess(new CalendarResource($calendar));

        return $this->responseErrors(config('code.basic.save_failed'), trans('messages.validate.save_failed')); 
    }

    /**
     * show
     * @api {post} /calendars/{id} Get calendar's detail
     * Display the specified resource.
     */
    public function show($id)
    {
        $calendar = $this->repository->find($id);
        if($calendar) return $this->responseSuccess(new PositionResource($calendar));

        return $this->responseErrors(config('code.calendar.position_not_found'), trans('messages.calendar.position_not_found')); 
    }
    

    /**
     * update
     * @api {put} /calendars/{id} Update calendar's detail
     * Update the specified resource in storage.
     * @bodyParam name string required Name of calendar
     * @bodyParam desc string required Description of calendar
     * @bodyParam audio string required audio of calendar
     * @bodyParam time_from string required time from of calendar
     * @bodyParam time_to string required time to of calendar
     * @bodyParam positions_id string required positions_id of calendar
     * @bodyParam status string required status of calendar
     */
    public function update(CalendarUpdateRequest $request, $id)
    {
        $inputs = $request->only('name', 'desc', 'audio', 'time_from', 'time_to', 'positions_id', 'status');
        $calendar = $this->repository->find($id);

        if($calendar){
            $updated = $this->repository->update($calendar, $inputs);
            if ($updated) {
                return $this->responseSuccess(new CalendarResource($updated));
            }
        }

        return $this->responseErrors(config('code.basic.save_failed'), trans('messages.validate.save_failed'));
    }

    /**
     * delete
     * @api {delete} /calendars/{id} Delete a calendar
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $calendar = $this->repository->find($id);
        if($calendar) 
            $this->repository->destroy($calendar);
        else
            return $this->responseErrors(config('code.basic.not_found'), trans('messages.validate.not_found'));

        return $this->responseSuccess([]);
    }
}
