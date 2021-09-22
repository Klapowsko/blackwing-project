<?php

namespace Database\Factories;

use App\Models\Demands;
use Illuminate\Database\Eloquent\Factories\Factory;

class DemandsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Demands::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'part_id' => $this->faker->numberBetween(1,2),
            'address' => $this->faker->address(),
            'state_id' => $this->faker->numberBetween(1,26),
            'user_id' => $this->faker->numberBetween(1,2),
            'status_id' => $this->faker->numberBetween(1,2),
            'created_at'=> $this->faker->date(),
            'updated_at'=> $this->faker->date(),
        ];
    }
}
