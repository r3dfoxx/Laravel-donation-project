<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Services\UserService;

class HomeController extends Controller
{
    public $user;
    public $total;
    public $month;


    /**
     * @var UserService;
     */


    public function __construct(UserService $userS)
    {
        $this->user = $userS;

    }


    public function index()
    {
        return view('home');
    }


}
