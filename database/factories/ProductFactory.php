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
	public function definition()
	{
		return [
			'category_id' => Category::factory(),
			'description' => $this->faker->words(5, true),
			'image' => null,
			'name' => "Product {$this->faker->word}",
			'price' => $this->faker->randomNumber(4),
		];
	}
}
