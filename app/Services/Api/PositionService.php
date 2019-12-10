<?php

namespace App\Services\Api;

use App\Services\Api\Contracts\PositionServiceInterface;
use App\Repositories\Contracts\PositionRepositoryInterface;
use App\Models\Position;

class PositionService extends BaseService implements PositionServiceInterface
{
    protected $repository;

    public function __construct(Position $model, PositionRepositoryInterface $repository)
    {
        $this->model = $model;
        $this->repository = $repository;
    }



    /**
     * @param array $inputs Associative array [name, email, password]
     *
     * @return \App\Models\Position|array
     */
    public function create(array $inputs)
    {
        return $this->repository->create(array_merge(['users_id' => 1],$inputs));
    }

    /**
     * @param \App\Models\Position $position
     * @param array $inputs Associative array [name, birthday, job, gender]
     *
     * @return boolean
     */
    public function update($position, $inputs)
    {
        return $this->repository->update($position, $inputs);

    }

    /**
     * @param \App\Models\Position $position
     * @param array $inputs Associative array [name, birthday, job, gender]
     *
     * @return boolean
     */
    public function delete($id)
    {
        $position = $this->repository->find($id);
        if($position){
            $this->repository->destroy($position);
            return api_success(config('position.delete_success'));
        }
        return api_errors(200, config('position.not_found'));
    }

    /**
     * @param \App\Models\Position $position
     * @param array $inputs Associative array [name, birthday, job, gender]
     *
     * @return boolean
     */

    public function find($id)
    {
        return $this->repository->find($id);
    }
}
