<?php

namespace Tests\Unit;

use App\Models\Product;
use PHPUnit\Framework\TestCase;

class CalculateTest extends \Tests\TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_calculate_vat()
    {
        $attributes = [
            'title' => 'Test',
            'quantity' => 2,
            'price' => 500
        ];
        $product = Product::create($attributes);

        $formula = ($attributes['quantity'] * $attributes['price']) * (1 + config('calculate.vat'));
        $this->assertEquals($product->calculate(), $formula);
    }
}
