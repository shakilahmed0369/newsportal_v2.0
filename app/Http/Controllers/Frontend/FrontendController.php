<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\HomeSectionElement;
use App\Models\News;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class FrontendController extends Controller
{
    

    public function index()
    {
        $categories = Category::where('status', 1)->get();
        
        $sections = HomeSectionElement::with('category')->get();
        $featured = News::with('category')->where('on_featured', 1)->where('status', 1)->limit(11)->get();
        $videos = Video::latest()->limit(5)->get();

        $recentNews = News::with('category')->select('title', 'image', 'created_at', 'category_id', 'slug')->latest()->limit(4)->get();
        //most readed post
        $mostReaded = News::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->where('status', 1)->orderBy('views', 'desc')->limit(4)->get();

        return view('frontend.pages.index', compact('featured', 'recentNews', 'sections', 'videos', 'categories', 'mostReaded'));
    }

    public function showByCategory($category)
    {
        $category = Category::where('categorySlug', $category)->first();
        if($category){
            $recentNews = News::with('category')->select('title', 'image', 'created_at', 'category_id', 'slug')->latest()->limit(4)->get();
            $categories = Category::where('status', 1)->get();
            $newses = News::with('category')->where('category_id', $category->id)->paginate(9);
            //most readed post
            $mostReaded = News::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->where('status', 1)->orderBy('views', 'desc')->limit(4)->get();
            return view('frontend.pages.category', compact('categories', 'category', 'newses', 'recentNews', 'mostReaded'));
        }else{
            return abort(404);
        }
        
    }

    public function showNews(Request $request,$cat, $slug)
    {
        
        
        $categories = Category::where('status', 1)->get();
        $news = News::where('slug', $slug)->first();

        $reletedNewses = News::with('category')->where('category_id', $news->category_id)->where('id', '!=', $news->id)->latest()->limit(6)->get();

        $recentNews = News::with('category')->select('title', 'image', 'created_at', 'category_id', 'slug')->latest()->limit(4)->get();

        //// Views counter
        $newsKey = 'news_'.$news->id;

        if(!Cookie::get($newsKey)){
            $news->increment('views');
            $news->save();
            Cookie::queue($newsKey , true , 86400);
        }

        //most readed post
        $mostReaded = News::whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])->where('status', 1)->orderBy('views', 'desc')->limit(4)->get();

        return view('frontend.pages.show', compact('news', 'categories', 'reletedNewses', 'recentNews', 'mostReaded'));
    }

 
    
}
