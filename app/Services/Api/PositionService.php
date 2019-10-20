<?php

namespace App\Services\Api;

use App\Services\Api\Contracts\PositionServiceInterface;
use App\Models\Position;

class PositionService extends BaseService implements PositionServiceInterface
{
    protected $model;

    public function __construct(Position $model)
    {
        $this->model = $model;
    }



    /**
     * @param array $inputs Associative array [name, email, password]
     *
     * @return \App\Models\Position|array
     */
    public function create(array $inputs)
    {
        return $this->model->create(array_merge(['users_id' => 1],$inputs));
    }

    /**
     * @param \App\Models\Position $position
     * @param array $inputs Associative array [name, birthday, job, gender]
     *
     * @return boolean
     */
    public function update($position, $inputs)
    {
        return $this->model->update($position, $inputs);
    }

    /**
     * @param \App\Models\Position $position
     * @param array $inputs Associative array [name, birthday, job, gender]
     *
     * @return boolean
     */
    public function delete($id)
    {
        $position = $this->findPosition($id);
        if($position){
            $this->model->destroy($position);
            return api_success(config('position.delete_success'));
        } 
        return api_errors(200, config('position.not_found'));
    }

    /**
     * @param \App\Models\Device $devices
     * @param array $inputs Associative array [name, birthday, job, gender]
     *
     * @return boolean
     */
    public function devices($positionId)
    {
        $position = $this->findPosition($positionId);
        if($position){
            return api_success($position->devices);
        } 
        return api_errors(200, config('position.not_found'));
    }

    private function findPosition($id){
        return $this->model->find($id);
    }
}
