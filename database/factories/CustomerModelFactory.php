<?php

namespace Database\Factories;

use App\Models\CustomerModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CustomerModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_customer' => $this->faker->name(),
            'email_customer' => $this->faker->unique()->safeEmail(),
            'phone_customer' => $this->faker->phoneNumber(),
            'address_customer' => $this->faker->unique()->address(),
            'city_customer' => $this->faker->city(),
        ];
    }
}
