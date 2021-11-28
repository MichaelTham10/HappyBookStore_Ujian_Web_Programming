<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([ // 1
            'category' => 'Fiction'
        ]);
        DB::table('categories')->insert([ // 2
            'category' => 'Science'
        ]);
        DB::table('categories')->insert([ // 3
            'category' => 'Computer'
        ]);
        DB::table('categories')->insert([ // 4
            'category' => 'Horror'
        ]);
        DB::table('categories')->insert([ // 5
            'category' => 'Action'
        ]);
        DB::table('categories')->insert([ // 6
            'category' => 'Biography'
        ]);
        DB::table('categories')->insert([ // 7
            'category' => 'Romance'
        ]);
        DB::table('categories')->insert([ // 8
            'category' => 'Sci-fi'
        ]);
        DB::table('categories')->insert([ // 9
            'category' => 'School'
        ]);
        DB::table('categories')->insert([ // 10
            'category' => 'Cook'
        ]);  
    }
}
