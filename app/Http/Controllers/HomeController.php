<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {

        $users = User::all();
        return view('welcome', compact('users'));
    }

    public function filter(Request $request)
    {
        // $validate = $request->validate([
        //     '$start_date' => 'required',
        //     '$end_date' => 'required',
        // ]);
        $start_date =   $request->start_date;
        $end_date   =   $request->end_date;

       if(!isset($validate)){
        $users = User::whereDate('created_at', '>=',$start_date)
        ->whereDate('created_at', '<=',$end_date)
        ->get();
       }
            // dd($users);
        return view('welcome', compact('users'));
    }
}
