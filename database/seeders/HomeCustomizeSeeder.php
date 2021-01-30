<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\HomeSectionElement;
use Illuminate\Database\Seeder;

class HomeCustomizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 18; $i++){
            $homeCustomize = new HomeSectionElement();
            $homeCustomize->position = null;
            $homeCustomize->save();
        }

    }
}
