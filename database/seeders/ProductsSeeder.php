<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
         DB::table('products')->insert([
            [
            'name'=>'Bread',
            'price'=>'2000',
            'category'=>'baking',
            'description'=>'white pasta',
            'gallery'=>'https://images.unsplash.com/photo-1549931319-a545dcf3bc73?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8YnJlYWR8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60',
            ],
            [
                'name'=>'Pizza',
                'price'=>'16000',
                'category'=>'baking',
                'description'=>'pasta',
                'gallery'=>'https://images.unsplash.com/photo-1513104890138-7c749659a591?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8cGl6emF8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60',
            ],
                [
                    'name'=>'cake',
                    'price'=>'12000',
                    'category'=>'baking',
                    'description'=>'white pasta',
                    'gallery'=>'https://images.unsplash.com/photo-1578985545062-69928b1d9587?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8Y2FrZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
                ],
                    [
                        'name'=>'Samoosa',
                        'price'=>'2000',
                        'category'=>'flied',
                        'description'=>'white pasta',
                        'gallery'=>'https://images.unsplash.com/photo-1545668856-6eb87ce33b7a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8c2Ftb29zYXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60',
                        ]
            
         ]);
    }
}