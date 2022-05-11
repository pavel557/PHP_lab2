<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tag;
use App\Models\Article_tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $rows_to_add_count = 100;

        //Article::factory($rows_to_add_count)->create();

        //Tag::factory($rows_to_add_count)->create();
        Article_tag::factory($rows_to_add_count)->create();
    }
}
