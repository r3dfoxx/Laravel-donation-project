<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use App\Models\User;

class UserController extends Controller
{
    /**
     * @var User
     */
    public $user;
    public $userData;

    /**
     * @var UserService;
     */

    public function __construct(UserService $userService)
    {
        $this->user = $userService;
    }

    public function All()
    {
        $totalAmount = $this->user->calculateSum();
        $monthAmount = $this->user->calculateMonth();
        $topDonor = $this->user->topDonor();
        $userPaginate = $this->user->paginate();
        $donorInfo = $this->user->filterData();

        return view('dashboard', [
            'totalAmount' => $totalAmount,
            'monthAmount' => $monthAmount,
            'topDonor' => $topDonor,
            'userPaginate' => $userPaginate,
            'donorInfo' => $donorInfo,
        ]);
    }

}

