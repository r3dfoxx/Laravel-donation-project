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
    public $userData;


    /**
     * @var UserService;
     */


    public function __construct(UserService $userService )
    {
        $this->user = $userService;


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

        $num = $this->user->calculateSum();
        $var =$this->user->calculateMonth();
        $Donor = $this->user->topDonor();
        $userPaginate = $this->user->paginate();
        $DonorInfo = $this->user->allUsers();
        dd($DonorInfo);



        return view('dashboard', ['num' => $num , 'var' => $var , 'Donor' => $Donor, 'userPaginate'=>$userPaginate, 'DonorInfo'=> $DonorInfo]);
    }






}

