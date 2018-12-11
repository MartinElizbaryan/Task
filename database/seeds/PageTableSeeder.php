<?php

use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pages')->insert([
            'url' => "book",
            'title' => 'Our Book',
            'desc' => "Many Books",
            'content' => "<h1>Books</h1>",
        ]);
    }
}
