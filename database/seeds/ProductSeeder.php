<?php

use App\Product;
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
        $data = array([
            'title' => 'Laptop01',
            'description' => 'description etctsdad ',
            'price' => 4000,
            'stock' => 10,
            'status' => 'available',
        ],
        [
            'title' => 'Auricular01',
            'description' => 'description etctsdad ',
            'price' => 4000,
            'stock' => 10,
            'status' => 'available',
        ],
        [
            'title' => 'Laptop02',
            'description' => 'description etctsdad ',
            'price' => 4000,
            'stock' => 10,
            'status' => 'available',
        ],
        [
            'title' => 'Tablet01',
            'description' => 'description etctsdad ',
            'price' => 4000,
            'stock' => 10,
            'status' => 'available',
        ],
        [
            'title' => 'Auricular02',
            'description' => 'description etctsdad ',
            'price' => 4000,
            'stock' => 10,
            'status' => 'available',
        ],
        [
            'title' => 'Laptop03',
            'description' => 'description etctsdad ',
            'price' => 4000,
            'stock' => 10,
            'status' => 'available',
        ],
        [
            'title' => 'Mobile01',
            'description' => 'description etctsdad ',
            'price' => 4000,
            'stock' => 10,
            'status' => 'available',
        ],
        [
            'title' => 'Laptop04',
            'description' => 'description etctsdad ',
            'price' => 4000,
            'stock' => 10,
            'status' => 'available',
        ],
        [
            'title' => 'Camera01',
            'description' => 'description etctsdad ',
            'price' => 4000,
            'stock' => 10,
            'status' => 'available',
        ]);

        foreach ($data as $item) {
            Product::create($item);
        }



    }
}
