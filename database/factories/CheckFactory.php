<?php

namespace Database\Factories;

use App\Models\check;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CheckFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = check::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker\Factory::create();
        return [
            //
            'entry'=>now(),
            'Leaving'=>time::random(),
            'employee_id'=>randomDigitNot(0),
            'remember_token' => Str::random(10),
        ];
    }
}
