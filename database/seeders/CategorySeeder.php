<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i = 0; $i <= 10; $i ++){
            $category = new Category();
            $category->categoryName = $faker->word();
            $category->categorySlug = $faker->word();
            $category->save();
        }
    }
}
