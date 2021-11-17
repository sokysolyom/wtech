<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        Product::create([
            'title' => 'postel1-red-plastic',
            'price' => 100,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, similique illum! Voluptate, fugiat exercitationem dolores voluptatum enim quod ipsam molestias, nobis pariatur alias, aliquid ad ratione ipsum corporis commodi praesentium!',
            'colour' => 'red',
            'material' => 'plastic',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'category' => 2
        ]);
        Product::create([
            'title' => 'Postel2-red-plastic',
            'price' => 200,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'colour' => 'red',
            'material' => 'plastic',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'category' => 2
        ]);
        Product::create([
            'title' => 'Postel3-red-leather',
            'price' => 300,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'colour' => 'red',
            'material' => 'leather',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'category' => 2
        ]);
        Product::create([
            'title' => 'Postel4-blue-wood',
            'price' => 400,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'colour' => 'blue',
            'material' => 'wood',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'category' => 2
        ]);
        Product::create([
            'title' => 'Postel5-blue-wood',
            'price' => 500,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'colour' => 'blue',
            'material' => 'wood',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'category' => 2
        ]);
        Product::create([
            'title' => 'Postel6-red-wood',
            'price' => 600,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'colour' => 'red',
            'material' => 'wood',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'category' => 2
        ]);
        Product::create([
            'title' => 'Postel7-red-wood',
            'price' => 700,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'colour' => 'red',
            'material' => 'wood',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'category' => 2
        ]);
        Product::create([
            'title' => 'Postel8-blue-wood',
            'price' => 800,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'colour' => 'blue',
            'material' => 'wood',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'category' => 2
        ]);
        Product::create([
            'title' => 'Postel9-blue-wood',
            'price' => 900,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'colour' => 'blue',
            'material' => 'wood',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'category' => 2
        ]);
        Product::create([
            'title' => 'Stolicka1-blue-wood',
            'price' => 10,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'colour' => 'blue',
            'material' => 'wood',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'category' => 0
        ]);
        Product::create([
            'title' => 'Stolicka2-blue-plastic',
            'price' => 20,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'colour' => 'blue',
            'material' => 'plastic',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'category' => 0
        ]);
        Product::create([
            'title' => 'Stolicka3-blue-plastic',
            'price' => 30,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'colour' => 'blue',
            'material' => 'plastic',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'category' => 0
        ]);
        Product::create([
            'title' => 'Stolicka4-blue-plastic',
            'price' => 40,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'colour' => 'blue',
            'material' => 'plastic',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'category' => 0
        ]);
        Product::create([
            'title' => 'Stolicka5-red-plastic',
            'price' => 50,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'colour' => 'red',
            'material' => 'plastic',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'category' => 0
        ]);
        Product::create([
            'title' => 'Stolicka6-red-plastic',
            'price' => 60,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'colour' => 'red',
            'material' => 'plastic',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'category' => 0
        ]);
        Product::create([
            'title' => 'Stolicka7-red-plastic',
            'price' => 70,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'colour' => 'red',
            'material' => 'plastic',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'category' =>0
        ]);
        Product::create([
            'title' => 'Stolicka8-red-plastic',
            'price' => 80,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'colour' => 'red',
            'material' => 'plastic',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'category' => 0
        ]);
        Product::create([
            'title' => 'Stolicka9-red-plastic',
            'price' => 90,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'colour' => 'red',
            'material' => 'plastic',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'category' => 0
        ]);
        

    }
}
