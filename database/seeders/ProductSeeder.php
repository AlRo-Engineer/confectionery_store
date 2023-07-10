<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'category_id' => 2,
                'name' => 'Elegant Éclair',
                'description' => 'A delicate éclair filled with rich vanilla cream and topped with a decadent chocolate glaze.',
                'price' => 200.00,
                'image' => 'images/pastries/pastries-1.jpeg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 2,
                'name' => 'Strawberry Cream Puff',
                'description' => 'Delicious cream puff filled with strawberry cream and sprinkled with powdered sugar.',
                'price' => 300.00,
                'image' => 'images/pastries/pastries-2.jpeg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 2,
                'name' => 'Cherry Tartlet',
                'description' => 'A delightful tartlet filled with sweet cherry compote, perfect with a cup of tea.',
                'price' => 250.00,
                'image' => 'images/pastries/pastries-3.jpeg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'name' => 'Pink Pleasure Candy Bar',
                'description' => 'A delightful combination of our signature Strawberry Pink Cupcake and Buttery Shortbread Cookies. This set brings together the creamy delight of our strawberry frosting with the classic, melt-in-your-mouth texture of our shortbread cookies.',
                'price' => 100.00,
                'image' => 'images/candy_bar/cb-1.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'name' => 'Cherry Delight',
                'description' => 'Experience the joy of sweet and tart flavors with our Cherry Delight Candy Bar. The set features our delightful Cherry Macarons and Strawberry Pink Cupcakes - a perfect mix for those who love a taste of cherries.',
                'price' => 100.00,
                'image' => 'images/candy_bar/cb-2.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 3,
                'name' => 'Sweet Classics Candy Bar',
                'description' => 'Savor the classic tastes of our Buttery Shortbread Cookies and Strawberry Pink Cupcakes in this Sweet Classics Candy Bar. It\'s a set that brings together the best of our bakery, offering a delicious experience for all.',
                'price' => 100.00,
                'image' => 'images/candy_bar/cb-3.png',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'name' => 'Chocolate Candy Set 1',
                'description' => 'Discover a delightful assortment of our finest chocolates in the Chocolate Candy Set 1. The set features an enticing mix of dark, milk, and white chocolates, each one more delicious than the last. This is a perfect treat for the ultimate chocolate lover.',
                'price' => 100.00,
                'image' => 'images/candy_set/cs-1.jpeg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'name' => 'Chocolate Candy Set 2',
                'description' => 'The Chocolate Candy Set 2 takes you on a sweet journey with a variety of our best-selling chocolate candies. Featuring milk chocolate truffles, dark chocolate caramels, and white chocolate pralines, this set offers a rich, decadent experience.',
                'price' => 100.00,
                'image' => 'images/candy_set/cs-2.jpeg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'category_id' => 4,
                'name' => 'Chocolate Candy Set 3',
                'description' => 'Our Chocolate Candy Set 3 offers an array of our most exquisite chocolate treats. With dark chocolate covered almonds, milk chocolate hazelnut truffles, and white chocolate raspberry hearts, this set is sure to satisfy any sweet tooth.',
                'price' => 100.00,
                'image' => 'images/candy_set/cs-3.jpeg',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
