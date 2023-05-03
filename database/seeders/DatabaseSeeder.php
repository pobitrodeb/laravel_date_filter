<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(20)->create();

        //Employee data for today
        Employee::factory(6)->create([
            'created_at' => Carbon::today(),
        ]);

        //Employee data for yesterday
        Employee::factory(6)->create([
            'created_at' => Carbon::yesterday(),
        ]);


        //Employee data for weak
        Employee::factory(6)->create([
            'created_at'    => Carbon::now()->startOfWeek(),
        ])->each(function ($post) {
            $post->created_at = $post->created_at->addMinutes(rand(1, 1440 * 6));
            $post->save();
        });

        //Employee data for last weak
        Employee::factory(6)->create([
            'created_at'    => Carbon::now()->subWeek()->startOfWeek(),
        ])->each(function ($post) {
            $post->created_at = $post->created_at->addMinutes(rand(1, 1440 * 6));
            $post->save();
        });

        //Employee data for month
        Employee::factory(6)->create([
            'created_at'=> Carbon::now()->startOfMonth(),
        ])->each(function ($post) {
            $post->created_at = $post->created_at->addMinutes(rand(1, 1440 * 30));
            $post->save();
        });

        //Employee data for last month
        Employee::factory(6)->create([
            'created_at'=> Carbon::now()->subMonth()->startOfMonth(),
        ])->each(function ($post) {
            $post->created_at = $post->created_at->addMinutes(rand(1, 1440 * 30));
            $post->save();
        });

        //Employee data for year
        Employee::factory(6)->create([
            'created_at'    => Carbon::now()->startOfYear(),
        ])->each(function ($post) {
            $post->created_at = $post->created_at->addMinutes(rand(1, 1440 * 366));
            $post->save();
        });

        //Employee data for last year
        Employee::factory(6)->create([
            'created_at'    => Carbon::now()->subYear()->startOfYear(),
        ])->each(function ($post) {
            $post->created_at = $post->created_at->addMinutes(rand(1, 1440 * 365));
            $post->save();
        });
    }
}
