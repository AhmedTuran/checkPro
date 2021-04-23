<?php

namespace Database\Factories;

use App\Models\employee;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(){
        $faker = Faker\Factory::create();
        return [
            //
            
                'full_name'=>$this->faker->full_name,
                'password'=>$this->faker->password,
                'salary'=>$this->faker->salary,
                'isAdmin'=>$this->regexify (0|1),
                'remember_token' => Str::random(10),
        ];
    }
}
