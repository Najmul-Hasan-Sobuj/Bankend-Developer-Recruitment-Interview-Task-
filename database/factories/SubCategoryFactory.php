<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SubCategory>
 */
class SubCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SubCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->name;

        return [
            'category_id' => Category::inRandomOrder()->first()->id,
            'name'        => $name,
            'created_at'  => fake()->dateTimeBetween('-1 year', 'now'),
            'updated_at'  => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
