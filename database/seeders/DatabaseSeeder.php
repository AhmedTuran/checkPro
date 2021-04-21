<?php

namespace Database\Seeders;

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
         \App\Models\employee::factory(10)->create();
         \App\Models\check::factory(10)->create();
//       timesheet::table('employees')->insert([
//             'full_name' => Str::random(10),
//             'password' => Hash::make('password'),
//             'salary' => decimal::random(10),
//             'isAdmin'=> Str::make('isAdmin'),
//             ]);
    }
}
