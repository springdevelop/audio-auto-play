<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Resources\Api\SiteInfoResource;
use App\Http\Requests\Api\SiteInfoStoreRequest;
use App\Http\Requests\Api\SiteInfoUpdateRequest;
use App\Repositories\Contracts\SiteInfoRepositoryInterface;

/**
 * @group siteinfos
 * @authenticated
 *
 * APIs for managing siteinfos
 */
class SiteInfoController extends BaseController
{

    protected $repository;

    public function __construct(SiteInfoRepositoryInterface $repository)
    {
        parent::__construct();
        $this->repository = $repository;
    }

    /**
     * index
     * @api {get} /siteinfos Get all list siteinfo
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siteinfos = $this->repository->all();
        return $this->responseSuccess(new SiteInfoResource($siteinfos));
    }

    /**
     * store
     * @api {post} /siteinfos Create siteinfo
     * @bodyParam name string required Name of siteinfo
     * @bodyParam desc string required Description of siteinfo
     * @bodyParam url string required url of siteinfo
     * Store a newly created resource in storage.
     */
    public function store(SiteInfoStoreRequest $request)
    {
        $inputs = $request->only('name', 'desc', 'url');
        $siteinfo = $this->repository->create($inputs);

        if($siteinfo) return $this->responseSuccess(new SiteInfoResource($siteinfo));

        return $this->responseErrors(config('code.basic.save_failed'), trans('messages.validate.save_failed')); 
    }

    /**
     * show
     * @api {post} /siteinfos/{id} Get siteinfo's detail
     * Display the specified resource.
     */
    public function show($id)
    {
        $siteinfo = $this->repository->find($id);
        if($siteinfo) return $this->responseSuccess(new SiteInfoResource($siteinfo));

        return $this->responseErrors(config('code.devices.device_not_found'), trans('messages.devices.device_not_found')); 
    }
    

    /**
     * update
     * @api {put} /siteinfos/{id} Update siteinfo's detail
     * Update the specified resource in storage.
     * @bodyParam name string required Name of siteinfo
     * @bodyParam desc string required Description of siteinfo
     * @bodyParam url string required url of siteinfo
     */
    public function update(SiteInfoUpdateRequest $request, $id)
    {
        $inputs = $request->only('name', 'desc', 'url');
        $siteinfo = $this->repository->find($id);

        if($siteinfo){
            $updated = $this->repository->update($siteinfo, $inputs);
            if ($updated) {
                return $this->responseSuccess(new SiteInfoResource($updated));
            }
        }

        return $this->responseErrors(config('code.basic.save_failed'), trans('messages.validate.save_failed'));
    }

    /**
     * delete
     * @api {delete} /siteinfos/{id} Delete a siteinfo
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $siteinfo = $this->repository->find($id);
        if($siteinfo) 
            $this->repository->destroy($siteinfo);
        else
            return $this->responseErrors(config('code.basic.not_found'), trans('messages.validate.not_found'));

        return $this->responseSuccess([]);
    }
}
