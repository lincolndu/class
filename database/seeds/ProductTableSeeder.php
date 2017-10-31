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

         DB::table('products')->insert([
            'image' => 'http://shfcs.org/en/wp-content/uploads/2015/11/MedRes_Product-presentation-2.jpg',
            'title' => 'Product One',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, soluta ipsa. Delectus consequuntur id ullam. Delectus labore, cupiditate, itaque suscipit distinctio reprehenderit quia iusto quo dolorem beatae rem, facilis debitis.',
            'price' => 100,
        ]); 
         DB::table('products')->insert([
            'image' => 'http://shfcs.org/en/wp-content/uploads/2015/11/MedRes_Product-presentation-2.jpg',
            'title' => 'Product Two',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, soluta ipsa. Delectus consequuntur id ullam. Delectus labore, cupiditate, itaque suscipit distinctio reprehenderit quia iusto quo dolorem beatae rem, facilis debitis.',
            'price' => 100,
        ]); 
         DB::table('products')->insert([
            'image' => 'http://shfcs.org/en/wp-content/uploads/2015/11/MedRes_Product-presentation-2.jpg',
            'title' => 'Product Three',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, soluta ipsa. Delectus consequuntur id ullam. Delectus labore, cupiditate, itaque suscipit distinctio reprehenderit quia iusto quo dolorem beatae rem, facilis debitis.',
            'price' => 100,
        ]); 
         DB::table('products')->insert([
            'image' => 'http://shfcs.org/en/wp-content/uploads/2015/11/MedRes_Product-presentation-2.jpg',
            'title' => 'Product Four',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, soluta ipsa. Delectus consequuntur id ullam. Delectus labore, cupiditate, itaque suscipit distinctio reprehenderit quia iusto quo dolorem beatae rem, facilis debitis.',
            'price' => 100,
        ]); 
         DB::table('products')->insert([
            'image' => 'http://shfcs.org/en/wp-content/uploads/2015/11/MedRes_Product-presentation-2.jpg',
            'title' => 'Product Five',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, soluta ipsa. Delectus consequuntur id ullam. Delectus labore, cupiditate, itaque suscipit distinctio reprehenderit quia iusto quo dolorem beatae rem, facilis debitis.',
            'price' => 100,
        ]); 
         DB::table('products')->insert([
            'image' => 'http://shfcs.org/en/wp-content/uploads/2015/11/MedRes_Product-presentation-2.jpg',
            'title' => 'Product Six',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, soluta ipsa. Delectus consequuntur id ullam. Delectus labore, cupiditate, itaque suscipit distinctio reprehenderit quia iusto quo dolorem beatae rem, facilis debitis.',
            'price' => 100,
        ]);   



    }
}
