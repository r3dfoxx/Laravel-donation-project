<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Repositories\Interfaces\UserInterface;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;

class UserRepository extends BaseRepository implements UserInterface
{
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function calculateSum()
    {
        return $this->model->get('amount')->sum('amount');
    }

    public function calculateMonth()
    {
        return $this->model->whereYear('date', Carbon::now()->year)
            ->whereMonth('date', Carbon::now()->month)->sum('amount');
    }

    public function topDonor()
    {
        return $this->model->select('name', 'email', DB::raw('sum(amount) as user_amount'))->groupBy([
            'email',
            'name'
        ])->orderBy('user_amount', "DESC")->first();
    }

    public function filterData()
    {
        return $this->model->orderBy('Date')->get(['Date', 'Amount']);
    }
}
