<?php

namespace Database\Factories;

use App\Models\Repairs;
use Illuminate\Database\Eloquent\Factories\Factory;

class RepairsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Repairs::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'appointment_id' => $this->faker->randomNumber(),
        'name' => $this->faker->word,
        'description' => $this->faker->word,
        'cost' => $this->faker->randomFloat(2, 10, 1000), 
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
