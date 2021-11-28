<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([    // Book 1
            'category_id' => '1',
            'title' => 'Books 1 Fiction'
        ]);
        DB::table('books')->insert([    // Book 2
            'category_id' => '1',
            'title' => 'Books 2 Fiction'
        ]);
        DB::table('books')->insert([  // Book 3
            'category_id' => '1',
            'title' => 'Books 3 Fiction'
        ]);
        DB::table('books')->insert([ // Book 4
            'category_id' => '2',
            'title' => 'Books 1 Science'
        ]);
        DB::table('books')->insert([ // Book 5
            'category_id' => '2',
            'title' => 'Books 2 Science'
        ]);
        DB::table('books')->insert([ // Book 6
            'category_id' => '2',
            'title' => 'Books 3 Science'
        ]);
        DB::table('books')->insert([ // Book 7
            'category_id' => '2',
            'title' => 'Books 4 Science'
        ]);
        DB::table('books')->insert([ // Book 8
            'category_id' => '2',
            'title' => 'Books 5 Science'
        ]);
        DB::table('books')->insert([ // Book 9
            'category_id' => '1',
            'title' => 'Books 4 Fiction'
        ]);
        DB::table('books')->insert([ // Book 10
            'category_id' => '1',
            'title' => 'Books 5 Fiction'
        ]);
        DB::table('books')->insert([ // Book 11
            'category_id' => '2',
            'title' => 'Books 6 Science'
        ]);
        DB::table('books')->insert([ // Book 12
            'category_id' => '2',
            'title' => 'Books 7 Science'
        ]);
        DB::table('books')->insert([ // Book 13
            'category_id' => '2',
            'title' => 'Books 8 Science'
        ]);
        DB::table('books')->insert([ // Book 14
            'category_id' => '1',
            'title' => 'Books 6 Fiction'
        ]);
        DB::table('books')->insert([ // Book 15
            'category_id' => '1',
            'title' => 'Books 7 Fiction'
        ]);

        DB::table('books')->insert([ // Book 16
            'category_id' => '5',
            'title' => 'Books 1 Action'
        ]);
        DB::table('books')->insert([ // Book 17
            'category_id' => '7',
            'title' => 'Books 1 Romance'
        ]);
    }
}
