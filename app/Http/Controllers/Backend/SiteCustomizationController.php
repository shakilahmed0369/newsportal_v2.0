<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\HomeSection;
use App\Models\HomeSectionElement;
use Database\Seeders\HomeCustomizeSeeder;
use Laravel\Ui\Presets\React;

class SiteCustomizationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function showNavIndex()
    {
        $activeCategory = Category::where('status', 1)->orderBy('position')->get();
        $enactiveCategory = Category::where('status', 0)->get();
        return view('backend.pages.customize.nav_customize', compact('activeCategory', 'enactiveCategory'));
    }

    public function activeNavSort(Request $request)
    {
        $i = 1;
       foreach($request->Ids as $id){
           $active = Category::find($id);
           $active->status = 1;
           $active->position = $i;
           $active->save();
           $i++;
       }
    }

    public function enactiveNavSort(Request $request)
    {
      
       foreach($request->Ids as $id){
           $active = Category::find($id);
           $active->status = 0;
           $active->position = 0;
           $active->save();
      
       }
    }



    // HOME Page Customize
    public function homeCustomize()
    {
        $categorys = Category::all();
        $homeCustomize = HomeSectionElement::all();
        return view('backend.pages.customize.home_customize', compact('categorys', 'homeCustomize'));
    }

    public function homeUpdate(Request $request)
    {
        // return $request;
        $positions = HomeSectionElement::all();
        $d = [];
        foreach($positions as $row){
            $category = "categoryId-$row->id";
            $categoryId = $request[$category];
            $homeupdate = HomeSectionElement::find($row->id);
            $homeupdate->position = $categoryId;
            $homeupdate->save();
            
        }

        return redirect()->back();
        
    }

    


}
