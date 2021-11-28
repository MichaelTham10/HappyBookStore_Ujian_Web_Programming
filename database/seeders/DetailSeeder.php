<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('details')->insert([
            'book_id' => '1',
            'author' => 'Authorian Artorious',
            'publisher' => 'Gramdieania',
            'year' => 2003,
            'description' => 'This book is about history and fiction. Arthur is the king of the king that wield the excalibur swords'
        ]);

        DB::table('details')->insert([
            'book_id' => '2',
            'author' => 'Miyajima Ren',
            'publisher' => 'Gramdieania',
            'year' => 2005,
            'description' => 'This book is about about action fiction. Ren was a great samurai accros japan that rules Yakuza Organization'
        ]);

        DB::table('details')->insert([
            'book_id' => '3',
            'author' => 'Adrian Garnt',
            'publisher' => 'Gramdieania',
            'year' => 2010,
            'description' => 'This book is about love fiction. Jack was live in space with his girlfriend joy, after the doomsday'
        ]);

        DB::table('details')->insert([
            'book_id' => '4',
            'author' => 'Sucipto Purba',
            'publisher' => 'Gramdieania',
            'year' => 2010,
            'description' => 'This book is about science. In this book will show how mamals will grow each year nad each seasons'
        ]);

        DB::table('details')->insert([
            'book_id' => '5',
            'author' => 'Takahiro',
            'publisher' => 'Gramdieania',
            'year' => 2015,
            'description' => 'This book is about science. In this book will show how Rafflesia Arnoldi will live and grow each year and seasons'
        ]);
        DB::table('details')->insert([
            'book_id' => '6',
            'author' => 'Takahiro',
            'publisher' => 'Gramdieania',
            'year' => 2015,
            'description' => 'This book is about science. In this book will show how Orchid will live and grow each year and seasons'
        ]);

        DB::table('details')->insert([
            'book_id' => '7',
            'author' => 'Takahiro',
            'publisher' => 'Gramdieania',
            'year' => 2015,
            'description' => 'This book is about science. In this book will show how Orchid will live and grow each year and seasons'
        ]);
        DB::table('details')->insert([
            'book_id' => '8',
            'author' => 'Takahiro',
            'publisher' => 'Gramdieania',
            'year' => 2015,
            'description' => 'This book is about science. In this book will show how Orchid will live and grow each year and seasons'
        ]);
        DB::table('details')->insert([
            'book_id' => '9',
            'author' => 'Takahiro',
            'publisher' => 'Gramdieania',
            'year' => 2015,
            'description' => 'This book is about fiction. In this book will show how Dragons will live and grow each year and seasons'
        ]);
        DB::table('details')->insert([
            'book_id' => '10',
            'author' => 'Takahiro',
            'publisher' => 'Gramdieania',
            'year' => 2015,
            'description' => 'This book is about fiction. In this book will show how Phoenix will live and grow each year and seasons'
        ]);
        DB::table('details')->insert([
            'book_id' => '11',
            'author' => 'Takahiro',
            'publisher' => 'Gramdieania',
            'year' => 2015,
            'description' => 'This book is about science. In this book will show how Orchid will live and grow each year and seasons'
        ]);
        DB::table('details')->insert([
            'book_id' => '12',
            'author' => 'Takahiro',
            'publisher' => 'Gramdieania',
            'year' => 2015,
            'description' => 'This book is about science. In this book will show how Orchid will live and grow each year and seasons'
        ]);
        DB::table('details')->insert([
            'book_id' => '13',
            'author' => 'Takahiro',
            'publisher' => 'Gramdieania',
            'year' => 2015,
            'description' => 'This book is about science. In this book will show how Orchid will live and grow each year and seasons'
        ]);
        DB::table('details')->insert([
            'book_id' => '14',
            'author' => 'Takahiro',
            'publisher' => 'Gramdieania',
            'year' => 2015,
            'description' => 'This book is about fiction. In this book will show how Car will evolve each year and seasons'
        ]);
        DB::table('details')->insert([
            'book_id' => '15',
            'author' => 'Takahiro',
            'publisher' => 'Gramdieania',
            'year' => 2015,
            'description' => 'This book is about fiction. In this book will show how Robot  will evolve each year and seasons'
        ]);
        DB::table('details')->insert([
            'book_id' => '16',
            'author' => 'James Lebraune',
            'publisher' => 'Gramdieania',
            'year' => 2016,
            'description' => 'This book is about Action. In this book will show how Jack Spear will beat his enemy with his sword'
        ]);
        DB::table('details')->insert([
            'book_id' => '17',
            'author' => 'Rika Lebraune',
            'publisher' => 'Gramdieania',
            'year' => 2016,
            'description' => 'This book is about Romance. In this book will show the true meaning of love and life'
        ]);





    }
}
