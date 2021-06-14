<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product')->insert([
            [
                'product_name' => 'slim T-shirt',
                'product_price' => '3000',
                'product_cat' => 'shirt',
                'product_brand' => 'Hugo Boss',
                'product_description' => 'A long lasting cotton clothes made from 100% cotton',
                'product_image' => 'shirt/shirt2.jpg',
                'product_keywords' => 'shirt, guys, Hugo Boss, cotton',
                'favourite_product' => 'no',
                'latest_product' => 'yes',
            ],
            [
                'product_name' => 'amazi jacket',
                'product_price' => '10000',
                'product_cat' => 'jacket',
                'product_brand' => 'versace',
                'product_description' => 'A long lasting clothes made from 100% cotton',
                'product_image' => 'men/men1.jpg',
                'product_keywords' => 'shirt,men,jacket, nike',
                'favourite_product' => 'yes',
                'latest_product' => 'yes',
            ],
            [
                'product_name' => 'Office Shirt',
                'product_price' => '3000',
                'product_cat' => 'shirt',
                'product_brand' => 'armani',
                'product_description' => 'A long lasting office shirt',
                'product_image' => 'men/men2.jpg',
                'product_keywords' => 'shirt, ladies, girls, nike',
                'favourite_product' => 'yes',
                'latest_product' => 'yes',
            ],
            [
                'product_name' => 'stock jean',
                'product_price' => '6000',
                'product_cat' => 'jean',
                'product_brand' => 'Adidas',
                'product_description' => 'A long lasting and unfading jean',
                'product_image' => 'jeans/jean1.jpg',
                'product_keywords' => 'shirt, ladies, girls, Adidas, jean',
                'favourite_product' => 'yes',
                'latest_product' => 'yes',
            ],
            [
                'product_name' => 'slack jean',
                'product_price' => '5000',
                'product_cat' => 'jean',
                'product_brand' => 'nike',
                'product_description' => 'A long lasting and unfading jean',
                'product_image' => 'jeans/jean4.jpg',
                'product_keywords' => 'shirt, ladies, girls, nike',
                'favourite_product' => 'yes',
                'latest_product' => 'yes',
            ]
        ]);
    }
}