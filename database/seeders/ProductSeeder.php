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
        $products= [
            [
            'name'=>'Vegetable 1',
            'price'=> 100000,
            'description' => 'Limited Vegetable! Vegetables are parts of plants that are consumed by humans or other animals as food. The original meaning is still commonly used and is applied to plants collectively to refer to all edible plant matter, including the flowers, fruits, stems, leaves, roots, and seeds.',
            'image' => 'images/veg1.jpg'
            ],

            [
                'name'=>'Vegetable 2',
                'price'=> 100000,
                'description' => 'Limited Vegetable! Vegetables are parts of plants that are consumed by humans or other animals as food. The original meaning is still commonly used and is applied to plants collectively to refer to all edible plant matter, including the flowers, fruits, stems, leaves, roots, and seeds.',
                'image' => 'images/veg1.jpg'
            ],

            [
                'name'=>'Vegetable 3',
                'price'=> 100000,
                'description' => 'Limited Vegetable! Vegetables are parts of plants that are consumed by humans or other animals as food. The original meaning is still commonly used and is applied to plants collectively to refer to all edible plant matter, including the flowers, fruits, stems, leaves, roots, and seeds.',
                'image' => 'images/veg1.jpg'
            ],

            [
                'name'=>'Vegetable 4',
                'price'=> 100000,
                'description' => 'Limited Vegetable! Vegetables are parts of plants that are consumed by humans or other animals as food. The original meaning is still commonly used and is applied to plants collectively to refer to all edible plant matter, including the flowers, fruits, stems, leaves, roots, and seeds.',
                'image' => 'images/veg1.jpg'
            ],

            [
                'name'=>'Vegetable 5',
                'price'=> 100000,
                'description' => 'Limited Vegetable! Vegetables are parts of plants that are consumed by humans or other animals as food. The original meaning is still commonly used and is applied to plants collectively to refer to all edible plant matter, including the flowers, fruits, stems, leaves, roots, and seeds.',
                'image' => 'images/veg1.jpg'
            ],

            [
                'name'=>'Vegetable 6',
                'price'=> 100000,
                'description' => 'Limited Vegetable! Vegetables are parts of plants that are consumed by humans or other animals as food. The original meaning is still commonly used and is applied to plants collectively to refer to all edible plant matter, including the flowers, fruits, stems, leaves, roots, and seeds.',
                'image' => 'images/veg1.jpg'
            ],

            [
                'name'=>'Vegetable 7',
                'price'=> 100000,
                'description' => 'Limited Vegetable! Vegetables are parts of plants that are consumed by humans or other animals as food. The original meaning is still commonly used and is applied to plants collectively to refer to all edible plant matter, including the flowers, fruits, stems, leaves, roots, and seeds.',
                'image' => 'images/veg1.jpg'
            ],

            [
                'name'=>'Vegetable 8',
                'price'=> 100000,
                'description' => 'Limited Vegetable! Vegetables are parts of plants that are consumed by humans or other animals as food. The original meaning is still commonly used and is applied to plants collectively to refer to all edible plant matter, including the flowers, fruits, stems, leaves, roots, and seeds.',
                'image' => 'images/veg1.jpg'
            ],

            [
                'name'=>'Vegetable 9',
                'price'=> 100000,
                'description' => 'Limited Vegetable! Vegetables are parts of plants that are consumed by humans or other animals as food. The original meaning is still commonly used and is applied to plants collectively to refer to all edible plant matter, including the flowers, fruits, stems, leaves, roots, and seeds.',
                'image' => 'images/veg1.jpg'
            ],

            [
                'name'=>'Vegetable 10',
                'price'=> 100000,
                'description' => 'Limited Vegetable! Vegetables are parts of plants that are consumed by humans or other animals as food. The original meaning is still commonly used and is applied to plants collectively to refer to all edible plant matter, including the flowers, fruits, stems, leaves, roots, and seeds.',
                'image' => 'images/veg1.jpg'
            ],

            [
                'name'=>'Vegetable 11',
                'price'=> 250000,
                'description' => 'Vegetables are parts of plants that are consumed by humans or other animals as food. The original meaning is still commonly used and is applied to plants collectively to refer to all edible plant matter, including the flowers, fruits, stems, leaves, roots, and seeds.',
                'image' => 'images/veg2.jpg'
            ],

            [
                'name'=>'Vegetable 12',
                'price'=> 250000,
                'description' => 'Vegetables are parts of plants that are consumed by humans or other animals as food. The original meaning is still commonly used and is applied to plants collectively to refer to all edible plant matter, including the flowers, fruits, stems, leaves, roots, and seeds.',
                'image' => 'images/veg2.jpg'
            ],

            [
                'name'=>'Vegetable 13',
                'price'=> 250000,
                'description' => 'Vegetables are parts of plants that are consumed by humans or other animals as food. The original meaning is still commonly used and is applied to plants collectively to refer to all edible plant matter, including the flowers, fruits, stems, leaves, roots, and seeds.',
                'image' => 'images/veg2.jpg'
            ],

            [
                'name'=>'Vegetable 14',
                'price'=> 250000,
                'description' => 'Vegetables are parts of plants that are consumed by humans or other animals as food. The original meaning is still commonly used and is applied to plants collectively to refer to all edible plant matter, including the flowers, fruits, stems, leaves, roots, and seeds.',
                'image' => 'images/veg2.jpg'
            ],

            [
                'name'=>'Vegetable 15',
                'price'=> 250000,
                'description' => 'Vegetables are parts of plants that are consumed by humans or other animals as food. The original meaning is still commonly used and is applied to plants collectively to refer to all edible plant matter, including the flowers, fruits, stems, leaves, roots, and seeds.',
                'image' => 'images/veg2.jpg'
            ],

            ];

            foreach ($products as $key => $value) {
                Product::create($value);
            }
    }
}
