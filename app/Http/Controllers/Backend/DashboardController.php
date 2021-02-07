<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Video;
use Bitfumes\Multiauth\Model\Role;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $news = News::count();
        $categoryCount = Category::count();
        $gallery = Gallery::count();
        $videos = Video::count();
        $role = Role::count();
        return view('backend.pages.dashboard.dashboard', compact('news', 'categoryCount', 'gallery', 'videos', 'role'));
    }
}
