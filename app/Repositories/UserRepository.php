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

        $all = $this->total = $total;
        foreach ($all as $key => $value)
            foreach ($value as $allData)

                return $allData;
    }

    public function calculateMonth()
    {
        $month = DB::select(DB::raw(" SELECT SUM(amount) 
        FROM   `users`
        WHERE  DATE BETWEEN Date_sub(Now(), interval 1 month) AND Now()"));

        $userMonth = $this->month = $month;
        foreach ($userMonth as $key => $val)
            foreach ($val as $Value)

                return $Value;
    }

    public function topDonor()
    {
        $dataDonor = DB::select(DB::raw("SELECT Amount, `Name` FROM `users` WHERE Amount = (SELECT MAX(Amount) FROM users)"));
        foreach ($dataDonor as $name => $val)
            //foreach ($val as $value)



        return ($val);
    }

    public function paginate()
    {
        $users = DB::table('users')->paginate(10);
        return ($users);
    }
    public function allUsers()
    {
    $users =User::all();
     foreach ($users as $userKey =>$userValue)
         $allData = DB::select(DB::raw("SELECT `Date`, `Amount` FROM `users` WHERE id>0 ORDER BY `Amount` DESC"));
     //foreach ($allData as $data)
     return ($allData);
    }
}
