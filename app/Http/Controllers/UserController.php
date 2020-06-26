<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->paginate(10);

        return view('dashboard', ['users' => $users]);

    }

}

