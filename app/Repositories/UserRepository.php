<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Throwable;
use Illuminate\Database\Eloquent\Model;
use App\Repositories\Interfaces\BaseInterface;
use Illuminate\Support\Collection;
use App\Models\User;
use App\Repositories\Interfaces\UserInterface;

abstract class UserRepository implements UserInterface
{


    public function __construct(Model $model)
    {
        $this->model = $model;

    }

    public function count(): int
    {
        $count = DB::table('users')->sum('Amount');

        return true;
    }

}
