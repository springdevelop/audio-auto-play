<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Repositories\Contracts\PositionRepositoryInterface;

class PositionController extends BaseController
{

    protected $repository;

    public function __construct(PositionRepositoryInterface $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PositionRepositoryInterface $repository)
    {
        return $this->repository->all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->only('name', 'email', 'password');
        $position = $this->repository->create($inputs);
        if($position) return $this->responseSuccess(compact('user'));

        return $this->responseErrors(config('code.basic.save_failed'), trans('messages.validate.save_failed')); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $position = $this->repository->find($id);
        if($position) return $this->responseSuccess(compact('position'));

        return $this->responseErrors(config('code.position.position_not_found'), trans('messages.position.position_not_found')); 
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $inputs = $request->only('name');
        $position = $this->repository->find($id);

        if($position){
            $updated = $this->repository->update($position, $inputs);
            if ($updated) {
                return $this->responseSuccess([]);
            }
        }

        return $this->responseErrors(config('code.basic.save_failed'), trans('messages.validate.save_failed'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
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
