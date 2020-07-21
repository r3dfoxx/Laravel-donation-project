<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

abstract class BaseService
{
    /**
     * Repository
     *
     * @var $repo
     */
    public $repo;

    /**
     * Get all data
     *
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->repo->all();
    }

    public function create(array $data): Model
    {
        return $this->repo->create($data);
    }

    /**
     * Find record by id
     *
     * @param int $id
     * @return Model
     */
    public function findById(int $id): Model
    {
        return $this->repo->findById($id);
    }

    /**
     * Update data
     *
     * @param integer $id
     * @param array $data
     * @return boolean
     */
    public function update(string $id, array $data): bool
    {
        return $this->repo->update($id, $data);
    }

    /**
     * Delete data
     *
     * @param integer $id
     * @return boolean
     */
    public function destroy(string $id): bool
    {
        return $this->repo->destroy($id);
    }

}
