<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $controllers =
        [
            
            'Category',
            'News',
            'Gallery',
            'Video',
            'Page',
            'SiteCustomize',
            'Ad',
            'Settings',
        ];

        foreach($controllers as $controller)
        {
            if($controller == 'SiteCustomize')
            {
                Artisan::call("multiauth:permissions $controller --name=Read");
            }

            elseif($controller == 'Settings')
            {
                Artisan::call("multiauth:permissions $controller --name=Edit");
            }

            elseif($controller == 'Ad')
            {
                Artisan::call("multiauth:permissions $controller --name=Read");
                Artisan::call("multiauth:permissions $controller --name=Update");
            }
            else
            {
                Artisan::call("multiauth:permissions $controller");
            }
        }

    }
}
