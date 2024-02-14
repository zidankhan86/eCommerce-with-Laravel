<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $category = Category::pluck('id')->toArray();
        return [
            // 'category_id' => $category[array_rand($category)],
            // 'name' => $this->faker->sentence(3),
            // 'image' => $this->faker->imageUrl(),
            // 'weight' => $this->faker->randomFloat(2, 0.5, 5), // Generate weights between 0.5 and 5
            // 'stock' => $this->faker->randomNumber(2), // Generate random stock numbers
            // 'price' => $this->faker->randomFloat(2, 10, 100), // Generate prices between 10 and 100
            // 'discount' => $this->faker->randomElement([null, $this->faker->numberBetween(5, 20)]), // Sometimes add a discount
            // 'discounted_price' => $this->faker->randomFloat(2, 5, 50), // Generate discounted prices
            // 'time' => $this->faker->date('Y-m-d H:i:s'), // Generate a timestamp
            // 'description' => $this->faker->paragraph(),
            // 'product_information' => $this->faker->paragraphs(3, true),
            // 'status' => $this->faker->boolean()
        ];
    }
}
