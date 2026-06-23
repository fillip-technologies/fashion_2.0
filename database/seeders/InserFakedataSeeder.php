<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InserFakedataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
    [
        'category_id' => 7,
        'sub_category_id' => null,
        'name' => 'Kashmiri Wool Shawl',
        'slug' => 'kashmiri-wool-shawl',
        'description' => 'Premium embroidered sherwani for weddings and special occasions.',
        'price' => 8999,
        'sale_price' => 7999,
        'sku' => 'SHER001',
        'stock' => 20,
        'thumbnail' => 'products/sherwani-1.jpg',
        'status' => 1,
        'delivery' => '5-7 Days',
        'material_breakdown' => 'Silk Blend',
        'product_story' => 'Inspired by traditional royal craftsmanship.',
        'payment' => 'COD, UPI, Card',
        'packaging' => 'Premium Garment Bag',
        'the_line' => 'Wedding Collection',
    ],
    [
        'category_id' => 7,
        'sub_category_id' => null,
        'name' => 'Pashmina Shawl',
        'slug' => 'pashmina-shawl',
        'description' => 'Elegant ivory sherwani with detailed embroidery.',
        'price' => 10999,
        'sale_price' => 9999,
        'sku' => 'SHER002',
        'stock' => 15,
        'thumbnail' => 'products/sherwani-2.jpg',
        'status' => 1,
        'delivery' => '5-7 Days',
        'material_breakdown' => 'Jacquard Silk',
        'product_story' => 'Designed for a regal wedding look.',
        'payment' => 'COD, UPI, Card',
        'packaging' => 'Luxury Box',
        'the_line' => 'Royal Wedding Collection',
    ],
    [
        'category_id' => 7,
        'sub_category_id' =>null ,
        'name' => 'Embroidered Shawl',
        'slug' => 'embroidered-shawl',
        'description' => 'Designer sherwani with modern ethnic styling.',
        'price' => 9499,
        'sale_price' => 8499,
        'sku' => 'SHER003',
        'stock' => 25,
        'thumbnail' => 'products/sherwani-3.jpg',
        'status' => 1,
        'delivery' => '4-6 Days',
        'material_breakdown' => 'Art Silk',
        'product_story' => 'A blend of tradition and contemporary fashion.',
        'payment' => 'COD, UPI, Card',
        'packaging' => 'Premium Packaging',
        'the_line' => 'Designer Collection',
    ],

     ]);
    }
}
