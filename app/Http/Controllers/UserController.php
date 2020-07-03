<?php

namespace App\Http\Controllers;

use App\Http\Requests\DataRequests;
use App\Repositories\UserRepository;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Validator;
use App\Models\User;


class UserController extends Controller
{
    /**
     * @var UserService
     */
    public $user;


    /**
     * @var UserService
     */


    public function __construct(UserService $userService){
        $this->users = $userService;

    }

    public function index()
    {
        $users = DB::table('users')->paginate(10);
        //return view('dashboard' ,  'user' =>$this->user->count();]);
        return view('dashboard', ['users' => $users]);

    }

    public function submit(DataRequests $dataRequests)
    {
        $user = new User();
        $user->Name = $dataRequests['name'];
        $user->Email = $dataRequests['email'];
        $user->Amount = $dataRequests['donation'];
        $user->Message = $dataRequests['message'];


        $user->save();


        return redirect('dashboard');
    }

    public function showAll(UserService $userService, User $user)
    {
        return view('dashboard', ['user' => $this->user->count()]);
    }


}

