<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->name = 'Hoàng tử bé';
        $product->desc = 'aaa';
        $product->category = 'Văn học Việt Nam';
        $product->price = '50000';
        $product->image = '';
        $product->publish = 'Kim Đồng';
        $product->save();
    }
}
