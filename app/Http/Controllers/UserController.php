<?php

namespace App\Http\Controllers;

use App\Http\Requests\DataRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Validator;
use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->paginate(10);

        return view('dashboard', ['users' => $users]);

    }

    public function submit(Request $request)
    {
        $user = new User();
        $user->Name = $request['name'];
        $user->Email = $request['email'];
        $user->Amount = $request['donation'];
        $user->Message = $request['message'];


        $user->save();


        return redirect('dashboard');
    }


}

