<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    

    public function index()
    {

        $featured = News::where('on_featured', 1)->where('status', 1)->limit(11)->get();



        //dd($featureds);
        return view('frontend.pages.index', compact('featured'));
    }



    
}
