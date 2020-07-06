<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Throwable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Application;
use App\Repositories\Interfaces\BaseInterface;
use Illuminate\Support\Collection;
use App\Models\User;
use App\Repositories\Interfaces\UserInterface;

class UserRepository extends BaseRepository implements UserInterface
{
    public function __construct(User $model)
    {

        $this->model = $model;

    }

    public function calculateSum()
    {
        $total = DB::select(DB::raw("SELECT SUM(AMOUNT) AS \"TOTAL Sum\" FROM `users`
            WHERE `Amount`"));

        return $total;
    }

    public function calculateMonth()
    {
        $month = DB::select(DB::raw(" SELECT SUM(amount) 
        FROM   `users`
        WHERE  DATE BETWEEN Date_sub(Now(), interval 1 month) AND Now()"));

        return $month;
    }
}
