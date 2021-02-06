<?php

namespace Database\Seeders;

use App\Models\Ad;
use Illuminate\Database\Seeder;

class AdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ad = new Ad();
        $ad->adname   = 'homePage-box-ad';
        $ad->adsize   = '300x250';
        $ad->adtype   = '1';
        $ad->adimage  = 'boxad.png';
        $ad->adurl    = '';
        $ad->adscript = '';
        $ad->save();

        $ad = new Ad();
        $ad->adname   = 'categoriesPage-box-ad';
        $ad->adsize   = '300x250';
        $ad->adtype   = '1';
        $ad->adimage  = 'boxad.png';
        $ad->adurl    = '';
        $ad->adscript = '';
        $ad->save();

        $ad = new Ad();
        $ad->adname   = 'searchPage-box-ad';
        $ad->adsize   = '300x250';
        $ad->adtype   = '1';
        $ad->adimage  = 'boxad.png';
        $ad->adurl    = '';
        $ad->adscript = '';
        $ad->save();

        $ad = new Ad();
        $ad->adname   = 'showPage-box-ad';
        $ad->adsize   = '300x250';
        $ad->adtype   = '1';
        $ad->adimage  = 'boxad.png';
        $ad->adurl    = '';
        $ad->adscript = '';
        $ad->save();

        // banner ads

        $ad = new Ad();
        $ad->adname   = 'homePage-banner-ad-1';
        $ad->adsize   = '970x90';
        $ad->adtype   = '1';
        $ad->adimage  = 'bannerad.png';
        $ad->adurl    = '';
        $ad->adscript = '';
        $ad->save();

        $ad = new Ad();
        $ad->adname   = 'homePage-banner-ad-2';
        $ad->adsize   = '970x90';
        $ad->adtype   = '1';
        $ad->adimage  = 'bannerad.png';
        $ad->adurl    = '';
        $ad->adscript = '';
        $ad->save();

        $ad = new Ad();
        $ad->adname   = 'homePage-banner-ad-3';
        $ad->adsize   = '970x90';
        $ad->adtype   = '1';
        $ad->adimage  = 'bannerad.png';
        $ad->adurl    = '';
        $ad->adscript = '';
        $ad->save();

        $ad = new Ad();
        $ad->adname   = 'homePage-banner-ad-4';
        $ad->adsize   = '970x90';
        $ad->adtype   = '1';
        $ad->adimage  = 'bannerad.png';
        $ad->adurl    = '';
        $ad->adscript = '';
        $ad->save();

        $ad = new Ad();
        $ad->adname   = 'categoriesPage-banner-ad-1';
        $ad->adsize   = '970x90';
        $ad->adtype   = '1';
        $ad->adimage  = 'bannerad.png';
        $ad->adurl    = '';
        $ad->adscript = '';
        $ad->save();

        $ad = new Ad();
        $ad->adname   = 'searchPage-banner-ad-1';
        $ad->adsize   = '970x90';
        $ad->adtype   = '1';
        $ad->adimage  = 'bannerad.png';
        $ad->adurl    = '';
        $ad->adscript = '';
        $ad->save();

        $ad = new Ad();
        $ad->adname   = 'showPage-banner-ad-1';
        $ad->adsize   = '970x90';
        $ad->adtype   = '1';
        $ad->adimage  = 'bannerad.png';
        $ad->adurl    = '';
        $ad->adscript = '';
        $ad->save();
    }
}
