<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\HomeSectionElement;
use App\Models\News;
use App\Models\Video;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    

    public function index()
    {
        $sections = HomeSectionElement::with('category')->get();
        $featured = News::where('on_featured', 1)->where('status', 1)->limit(11)->get();
        $videos = Video::latest()->limit(5)->get();
        $recentNews = News::select('title', 'image', 'created_at')->latest()->limit(4)->get();
        return view('frontend.pages.index', compact('featured', 'recentNews', 'sections', 'videos'));
    }



    
}
