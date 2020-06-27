<?php

namespace App\Repositories;

use Throwable;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Interfaces\BaseInterface;
use Illuminate\Support\Collection;

abstract class BaseRepository implements BaseInterface
{
    /**
     * @var Model
     */
    protected $model;

    public $sortBy = 'id';
    public $sortOrder = 'desc';

    /**
     * Repo Constructor
     * Override to clarify typehinted model.
     * @param Model $model Repo DB ORM Model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * Get all instances of model
     *
     * @return Collection
     */
    public function all(): Collection
    {
        return $this->model
            ->orderBy($this->sortBy, $this->sortOrder)
            ->get();
    }

    /**
     * Create a new record in the database
     *
     * @param array $data
     * @return model
     */
    public function create(array $data)
    {
        try {
            $model =  $this->model->create($data);
        } catch (Throwable $th) {
            //log here
        }
        return $model;
    }

    /**
     * Update record in the database and get data back
     *
     * @param int $id
     * @param array $data
     * @return boolean
     */
    public function update(int $id, array $data): bool
    {
        try {
            $query = $this->model->where('id', $id)->first();
            $result = $query->update($data);
        } catch (Throwable $th) {
            //log here
        }
        return $result;
    }

    /**
     * Remove record from the database
     *
     * @param int $id
     * @return boolean
     */
    public function destroy(int $id): bool
    {
        try {
            $this->model->destroy($id);
        } catch (Throwable $th) {
            //log here
        }
        return true;
    }

    /**
     * Soft deleted record from the database
     *
     * @param int $id
     * @return boolean
     */
    public function softDestroy(int $id)
    {
        try {
            $this->model->destroy($id);
            $record = $this->model->onlyTrashed()->where('id', $id)->get();
        } catch (Throwable $th) {
            //log here
        }
        return $record->isNotEmpty();
    }

    /**
     * Show the record with the given id
     *
     * @param int $id
     * @return model
     */
    public function findById(int $id)
    {
        try {
            $model = $this->model->find($id);
        } catch (Throwable $th) {
            //log here
        }
        return $model;
    }

    /**
     * Get the associated model
     *
     * @return Model
     */
    public function getModel(): Model
    {
        return $this->model;
    }

    /**
     * Set the associated model
     *
     * @param $model
     * @return $this
     */
    public function setModel(Model $model)
    {
        $this->model = $model;
        return $this;
    }
}
