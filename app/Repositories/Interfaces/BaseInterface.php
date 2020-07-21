<?php

namespace App\Repositories\Interfaces;

use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;
use App\Services\BaseService;

interface BaseInterface
{
    public function all();

    public function create(array $data);

    public function update(int $id, array $data);

    public function destroy(int $id);


}
