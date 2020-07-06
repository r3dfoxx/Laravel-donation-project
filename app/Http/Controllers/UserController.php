<?php

namespace App\Http\Controllers;

use App\Http\Requests\DataRequests;
use App\Services\UserService;
use App\Repositories\UserRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Validator;
use App\Models\User;


class UserController extends Controller
{
    /**
     * @var User
     */
    public $user;
    public $total;
    public $month;
    public $sum;


    /**
     * @var UserService;
     */


    public function __construct(UserService $userS)
    {
        $this->user = $userS;

    }

    public function index()
    {
        $users = DB::table('users')->paginate(10);
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


    public function All()
    {
        $userData = new User();
        $userData = $this->user->calculateSum();
        foreach ($userData as $data)
            $arrays[] = (array)$data;
        foreach ($data as $sum)

            return view('dashboard', ['sum' => $sum]);
    }
    public function Month()
    {
        $userMonth = new  User();
        $userMonth = $this->user->calculateMonth();
        foreach ($userMonth as $item)
            $array[] = (array)$item;
        foreach ($item as $month)

            return view('dashboard', ['month' => $month] );
    }



}

