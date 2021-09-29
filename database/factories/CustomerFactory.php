<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create('ja_JP');
        return [
            'name' => $faker->name(),
            'email' => $faker->email(),
            'postcode' => $faker->postcode(),
            'address' => substr($faker->address(),7),
            'phone_number' => $faker->phoneNumber(),
        ];
    }
}
