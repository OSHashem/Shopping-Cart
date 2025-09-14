<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Product as product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new product([
            'imagePath' => 'https://m.media-amazon.com/images/I/81aCMT1zKtL._AC_UF1000,1000_QL80_.jpg',
            'title' => 'Harry Potter',
            'description' => 'Super cool ',
            'price' => 10,

        ]);
        $product->save();

        
        $product = new product([
            'imagePath' => 'https://m.media-amazon.com/images/I/81R2N4PRuUL._AC_UF1000,1000_QL80_.jpg',
            'title' => 'Wimpy Kid',
            'description' => 'Hilarious',
            'price' => 15,
            
        ]);
        $product->save();

        $product = new product([
            'imagePath' => 'https://m.media-amazon.com/images/I/51KUSdHb9kL._AC_UF1000,1000_QL80_.jpg',
            'title' => 'goosebumps ',
            'description' => 'Best Horror ',
            'price' => 20,
            
        ]);
        
        $product->save();

        $product = new product([
            'imagePath' => 'https://m.media-amazon.com/images/I/810+yJB3q5L._AC_UF1000,1000_QL80_.jpg',
            'title' => 'The Hobbit ',
            'description' => 'The Hobbit, or There and Back Again is a childrens fantasy novel by the English author J. R. R. ',
            'price' => 20,
            
        ]);
        
        $product->save();



    }
}
