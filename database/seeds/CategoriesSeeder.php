<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class, 10)->create();
        factory(ProductsTableSeeder::class, 10)->create();
        factory(ProductCommentSeeder::class, 10)->create();
    }
}
