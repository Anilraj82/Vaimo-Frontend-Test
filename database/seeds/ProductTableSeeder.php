<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
            'title' => 'BELT',
            'price' => 10,
            'salePrice' => 7,
            'imagePath' => './img/belt.png'
        ]);
        $product -> save();

        $product = new \App\Product([
            'title' => 'HAT',
            'price' => 10,
            'salePrice' => 7,
            'imagePath' => './img/hat.png'

        ]);
        $product -> save();

        $product = new \App\Product([
            'title' => 'SCARF',
            'price' => 10,
            'salePrice' => 7,
            'imagePath' => './img/scarf.png'
        ]);
        $product -> save();

        $product = new \App\Product([
            'title' => 'BAG',
            'price' => 10,
            'salePrice' => 7,
            'imagePath' => './img/bag.png'
        ]);
        $product -> save();
    }
}