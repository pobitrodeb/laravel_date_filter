<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DateFilterController extends Controller
{
  public function index()
  {
    $users = User::all();
    return view('index',compact('users'));
  }

  public function datefilter(Request $request)
  {

    $query = User::query();
    // $users = User::all();

    $date = $request->date_filter;

    switch($date){
        case 'today' :
            $query->whereDate('created_at', Carbon::today());
          break;
        case 'yesterday' :
            $query->whereDate('created_at', Carbon::yesterday());
          break;
        case 'this_week' :
            $query->whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]);
        break;
    }
    $users = $query->get();
    return view('index',compact('users'));
  }

}
