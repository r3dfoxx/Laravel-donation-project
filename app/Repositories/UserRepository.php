<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use Symfony\Component\String\ByteString;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Application;
use App\Repositories\Interfaces\BaseInterface;
use Illuminate\Support\Collection;
use App\Models\User;
use App\Repositories\Interfaces\UserInterface;
use Illuminate\Database\Query;
use Illuminate\Support\Carbon;

class UserRepository extends BaseRepository implements UserInterface
{
    public function __construct(User $model)
    {

        $this->model = $model;

    }

    public function calculateSum()
    {
        $total = $this->model->get('amount')->sum('amount');

        return $total;
    }


    public function calculateMonth()
    {

        $month = $this->model->whereYear('date', Carbon::now()->year)
            ->whereMonth('date', Carbon::now()->month)->sum('amount');

        return $month;

    }


    public function topDonor()
    {
        $data = $this->model->select('name', 'email', DB::raw('sum(amount) as user_amount'))->groupBy(['email', 'name'])->orderBy('user_amount', "DESC")->first();

        return $data;
    }

    public function paginate()
    {
        $user = $this->model->paginate(10);

        return $user;
    }

    public function allUsers()
    {
        $allData = $this->model->orderBy('Date')->get(['Date', 'Amount']);

        return $allData;
    }
}
