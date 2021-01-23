<?php

namespace Database\Factories;

use App\Models\AcademicRecord;
use Illuminate\Database\Eloquent\Factories\Factory;

class AcademicRecordFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AcademicRecord::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'degree' => $this->faker->word,
            'school' => $this->faker->word,
            'country' => $this->faker->country,
            'month_start' => $this->faker->monthName(),
            'year_start' => $this->faker->year(),
            'month_end' => $this->faker->monthName(),
            'year_end' => $this->faker->year(),
            'user_id' => $this->faker->numberBetween(1,3),
        ];
    }
}
