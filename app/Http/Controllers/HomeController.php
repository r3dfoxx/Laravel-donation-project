<?php

namespace App\Http\Controllers;

use App\Http\Requests\DataRequests;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function submit(DataRequests $dataRequests)
    {
        $user = new User();
        $user->name = $dataRequests['name'];
        $user->email = $dataRequests['email'];
        $user->amount = $dataRequests['donation'];
        $user->message = $dataRequests['message'];

        $user->save();

        return redirect('dashboard');
    }

}
