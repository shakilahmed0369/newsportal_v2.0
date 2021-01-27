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

        $category = ['সর্বশেষ', 'রাজনীতি','আন্তর্জাতিক', 'খেলাধুলা', 'বিনোদন', 'এক্সক্লুসিভ', 'মতামত'];
        
            foreach($category as $item){
                $category = new Category();
                $category->categoryName = $item;
                $category->categorySlug = $item;
                $category->save();
            }
            
    }
}
