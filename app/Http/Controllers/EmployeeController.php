<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Employee::query();
        $date      = $request->date_filter;
        switch($date){
            case 'all_date' :
                Employee::all();
                break;
            case 'today' :
                $query->whereDate('created_at',Carbon::today());
              break;
            case 'yesterday' :
                $query->whereDate('created_at',Carbon::yesterday());
              break;
            case 'the_week' :
                $query->whereBetween('created_at',[Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()]);
              break;
            case 'last_week' :
                $query->whereBetween('created_at',[Carbon::now()->subWeek(), Carbon::now()] );
                break;
            case 'this_month' :
                $query->whereMonth('created_at',Carbon::now()->month);
                break;
            case 'last_month' :
                $query->whereMonth('created_at',Carbon::now()->subMonth()->month);
                break;

            case 'this_year' :
                $query->whereYear('created_at',Carbon::now()->year);
                break;

            case 'last_year' :
                $query->whereYear('created_at',Carbon::now()->subYear()->year);
                break;
        }
        $employees = $query->get();

        return view('index', compact('employees'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }
}
