<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

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

    protected $model = Product::class;
    public function definition()
    {
        $product = ['chair', 'table', 'box', 'chalk', 'fridge', 'refrigerator', 'speaker'];
       
        return [
           'product_name' => $this->faker->randomElement($product), 
           'stock' => $this->faker->numberBetween(1, 100), 
           'image_path' => $this->faker->imageUrl(640, 480, 'animals', true), 
           'price' => $this->faker->numberBetween(70000, 300000),
           'series' => $this->faker->word(),
           'detail' => $this->faker->words(30, true),
        ];
    }
}
