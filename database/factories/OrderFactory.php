<?php

namespace Database\Factories;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'customer_name' => 'Unknown Customer',
            'product_id' => 6 ,
            'quantity' => 3,
            'total' => 60,
            'created_at' => DateTime::createFromFormat('Y-m-d', '2022-05-10')
        ];
    }
}
