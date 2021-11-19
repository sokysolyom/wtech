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
            'title' => 'postel1-cervena-plast',
            'price' => 100,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo, similique illum! Voluptate, fugiat exercitationem dolores voluptatum enim quod ipsam molestias, nobis pariatur alias, aliquid ad ratione ipsum corporis commodi praesentium!',
            'colour' => 'cervena',
            'material' => 'plast',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'category' => 2
        ]);
        Product::create([
            'title' => 'Postel2-cervena-plast',
            'price' => 200,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'colour' => 'cervena',
            'material' => 'plast',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'category' => 2
        ]);
        Product::create([
            'title' => 'Postel3-cervena-koza',
            'price' => 300,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'colour' => 'cervena',
            'material' => 'koza',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'category' => 2
        ]);
        Product::create([
            'title' => 'Postel4-modra-drevo',
            'price' => 400,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'colour' => 'modra',
            'material' => 'drevo',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'category' => 2
        ]);
        Product::create([
            'title' => 'Postel5-modra-drevo',
            'price' => 500,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'colour' => 'modra',
            'material' => 'drevo',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'category' => 2
        ]);
        Product::create([
            'title' => 'Postel6-cervena-drevo',
            'price' => 600,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'colour' => 'cervena',
            'material' => 'drevo',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'category' => 2
        ]);
        Product::create([
            'title' => 'Postel7-cervena-drevo',
            'price' => 700,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'colour' => 'cervena',
            'material' => 'drevo',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'category' => 2
        ]);
        Product::create([
            'title' => 'Postel8-modra-drevo',
            'price' => 800,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'colour' => 'modra',
            'material' => 'drevo',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'category' => 2
        ]);
        Product::create([
            'title' => 'Postel9-modra-drevo',
            'price' => 900,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'colour' => 'modra',
            'material' => 'drevo',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'category' => 2
        ]);
        Product::create([
            'title' => 'Stolicka1-modra-drevo',
            'price' => 10,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'colour' => 'modra',
            'material' => 'drevo',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'category' => 0
        ]);
        Product::create([
            'title' => 'Stolicka2-modra-plast',
            'price' => 20,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'colour' => 'modra',
            'material' => 'plast',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'category' => 0
        ]);
        Product::create([
            'title' => 'Stolicka3-modra-plast',
            'price' => 30,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'colour' => 'modra',
            'material' => 'plast',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'category' => 0
        ]);
        Product::create([
            'title' => 'Stolicka4-modra-plast',
            'price' => 40,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'colour' => 'modra',
            'material' => 'plast',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'category' => 0
        ]);
        Product::create([
            'title' => 'Stolicka5-cervena-plast',
            'price' => 50,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'colour' => 'cervena',
            'material' => 'plast',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'category' => 0
        ]);
        Product::create([
            'title' => 'Stolicka6-cervena-plast',
            'price' => 60,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'colour' => 'cervena',
            'material' => 'plast',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'category' => 0
        ]);
        Product::create([
            'title' => 'Stolicka7-cervena-plast',
            'price' => 70,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'colour' => 'cervena',
            'material' => 'plast',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'category' =>0
        ]);
        Product::create([
            'title' => 'Stolicka8-cervena-plast',
            'price' => 80,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'colour' => 'cervena',
            'material' => 'plast',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'category' => 0
        ]);
        Product::create([
            'title' => 'Stolicka9-cervena-plast',
            'price' => 90,
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'colour' => 'cervena',
            'material' => 'plast',
            'rozmery' => 'šŕika: 150cm, dĺžka: 400cm',
            'parametre' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Amet laboriosam mollitia veritatis distinctio odio officia, animi voluptatum pariatur earum libero numquam ipsum magni architecto ut quae fugit quos fuga nulla! Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis consectetur nemo praesentium reprehenderit, repellat rem! Eveniet blanditiis obcaecati aperiam nihil ex maxime, consequuntur suscipit quaerat dolores reiciendis illum ipsa voluptates!',
            'category' => 0
        ]);
        

    }
}
