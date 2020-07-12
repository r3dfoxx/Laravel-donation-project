<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Symfony\Component\String\ByteString;
use Throwable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Application;
use App\Repositories\Interfaces\BaseInterface;
use Illuminate\Support\Collection;
use App\Models\User;
use App\Repositories\Interfaces\UserInterface;
use Illuminate\Database\Query;

class UserRepository extends BaseRepository implements UserInterface
{
    public function __construct(User $model)
    {

        $this->model = $model;

    }

    public function calculateSum()
    {
        $total = DB::select(DB::raw("SELECT SUM(AMOUNT) AS \"TOTAL Sum\" FROM `users`
            WHERE `amount`"));

        $all = $this->total = $total;
        foreach ($all as $key => $value) {
            foreach ($value as $allData) {
                return $allData;
            }
        }
    }

    public function calculateMonth()
    {
        $month = DB::select(DB::raw(" SELECT SUM(amount) 
        FROM   `users`
        WHERE  `date` BETWEEN Date_sub(Now(),   interval 1 month) AND Now()"));

        $userMonth = $this->month = $month;
        foreach ($userMonth as $key => $val) {
            foreach ($val as $Value) {
                return $Value;
            }
        }
    }

    public function topDonor()
    {
        $topDonors = DB::select(DB::raw("SELECT `name` ,email , SUM(amount) AS Amount 
FROM users
GROUP BY email, `name`
ORDER BY Amount DESC"));
        foreach ($topDonors as $topIndex => $topDonorValue) //$topDonor = $this->model->select(['name' , 'email']), SUM('amount'),groupBy(['email' , 'name']),orderBy('amount'(DESC))->get();


        {
            return ($topDonorValue);
        }
    }

    public function paginate()
    {
        $user = $this->model->paginate(10);

        return ($user);
    }

    public function allUsers()
    {
        $allData = $this->model->orderBy('Date')->get(['Date', 'Amount']);

        return ($allData);
    }
}
