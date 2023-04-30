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
            'appointment_id' => $this->faker->word,
        'name' => $this->faker->word,
        'description' => $this->faker->word,
        'cost' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
