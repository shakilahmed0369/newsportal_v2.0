<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $news = News::all();
        $categories = Category::count();
        return view('backend.pages.dashboard.dashboard', compact('news', 'categories'));
    }
}
