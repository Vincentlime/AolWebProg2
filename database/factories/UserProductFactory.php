<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\User;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserProduct>
 */
class UserProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $modelUser = User::class;
    protected $modelProduct = Product::class;
    public function definition()
    {
        $users = User::where('role', 'customer')->get();
        $products = Product::all();

        $i=0;
        $j=0;
        foreach ($users as $user) {
            $usrArray[$i] = $user->user_id;
            $i++;
        }
        foreach ($products as $product) {
            $prdArray[$j] = $product->product_id;
            $j++;
        }

        return [
            'user_id' => $this->faker->randomElement($usrArray),
            'product_id' => $this->faker->randomElement($prdArray),
        ];
    }
}
