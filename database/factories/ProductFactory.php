<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $sku = fake()->numerify('SKU#####');
        while (Product::where('sku', $sku)->exists()) {
            $sku = fake()->numerify('SKU#####');
        }
        return [
            'category_id'     => Category::inRandomOrder()->first()->id,
            'sub_category_id' => SubCategory::inRandomOrder()->first()->id,
            'name'            => fake()->word,
            'slug'            => fake()->unique()->slug,
            'sku'             => $sku,
            'quantity'        => fake()->numberBetween(0, 100),
            'image'           => fake()->imageUrl,
            'description'     => fake()->paragraph,
            'old_price'       => $this->faker->randomFloat(2, 10, 1000),
            'new_price'       => $this->faker->randomFloat(2, 1, 500),
            'created_at'      => fake()->dateTimeBetween('-1 year', 'now'),
            'updated_at'      => fake()->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
