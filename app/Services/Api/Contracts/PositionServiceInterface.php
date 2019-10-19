<?php
namespace App\Services\Api\Contracts;

interface PositionServiceInterface extends BaseServiceInterface
{
	/**
     * @param array $inputs Associative array [name, email, password]
     *
     * @return \App\Models\Position|array
     */
    public function create(array $inputs);

    /**
     * @param \App\Models\Position $position
     * @param array $inputs Associative array [name, birthday, job, gender]
     *
     * @return boolean
     */
    public function update($position, $inputs);

    /**
     * @param \App\Models\Position $position
     * @param array $inputs Associative array [name, birthday, job, gender]
     *
     * @return boolean
     */
    public function delete($id);

    /**
     * @param \App\Models\Device $devices
     * @param array $inputs Associative array [name, birthday, job, gender]
     *
     * @return boolean
     */
    public function devices($positionId);
}
