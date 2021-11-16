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
        Product::create([
            'title' => 'Postel minecaft',
            'price' => 250,
            'description' => 'Good watch',
            'colour' => 'red',
            'material' => 'plastic',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'nejaky teytesdasda',
            'category' => 2
        ]);
        Product::create([
            'title' => 'Postel minecaft2',
            'price' => 500,
            'description' => 'Good watch',
            'colour' => 'red',
            'material' => 'wood',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'nejaky teytesdasda',
            'category' => 2
        ]);
        Product::create([
            'title' => 'Postel minecaft3',
            'price' => 550,
            'description' => 'Good watch',
            'colour' => 'red',
            'material' => 'leather',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'nejaky teytesdasda',
            'category' => 2
        ]);
    }
}