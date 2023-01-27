<?php

namespace Database\Factories;

use App\Models\CustomerModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CustomerModel>
 */
class CustomerModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = CustomerModel::class;
    public function definition()
    {
        $gender = ['Male', 'Female'];
        $city = ['Nadiad', 'Anand', 'Vadodara', 'Surat', 'Rajkot', 'Ahemdabad'];
        return [
            'fname' =>fake()->firstName(),
            'lname' =>fake()->lastName(),
            'dob' => $this->faker->date(),
            'email' => $this->faker->email(),
            'gender' => $this->faker->randomElement($gender),
            'phone' => $this->faker->phoneNumber(),
            'city'=>$this->faker->randomElement($city),
        ];
    }
}
