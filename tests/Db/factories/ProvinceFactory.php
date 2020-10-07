<?php

namespace Sepisoltani\Iran\Tests\Db\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Sepisoltani\Iran\Models\Province;

class ModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Province::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name,
            'en_name' => $this->faker->unique()->safeEmail,
            'area_code' => $this->faker->numberBetween(1, 99),
            'lat' => $this->faker->latitude,
            'lng' => $this->faker->longitude,
            'approved' => 1
        ];
    }
}
