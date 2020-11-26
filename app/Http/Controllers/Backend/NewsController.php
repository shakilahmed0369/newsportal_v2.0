<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;
use Yajra\Datatables\Datatables;
use File;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.news.index');
    }

    public function getResponse()
    {
        $news = News::select('id', 'image' , 'title')->where('status', 1);
        
        return Datatables::of($news)
        ->addIndexColumn()
        ->addColumn('image', function($news){
            $url = asset("storage/uploads/$news->image");
            return '<img src='.$url.' border="0" width="100" class="img-fluid" align="center" />';
        })
        ->addColumn('action', function($news){
            $route = route('admin.news.edit', $news->id);
            return '<a href="'.$route.'" class="btn btn-primary btn-edit">Edit</a>
            <a href="" onclick="event.preventDefault()" class="btn-delete btn btn-danger" data-id="'.$news->id.'">Delete</a>
            ';
        })->rawColumns(['image','action'])
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.pages.news.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        //field validation
        $request->validate([
            'title' => 'required|max:260',
            'body' => 'required',
            'tags' => 'required|max:260',
            'meta_description' => 'required',
            'photo' => 'required|image|max:3000',
            'category' => 'required',
        ]);


        //making slug of title
        $hasTitle = News::where('title', $request->title)->get();
        if(count($hasTitle) > 0){
            $slug = makeSlug($request->title).'-'.bnNum(mt_rand(0, 9999999));
        }else{
            $slug = makeSlug($request->title);
        }


         /**
          * Image resizing and saving in defined dirs
          */
          if($request->hasFile('photo')){
            $image = $request->file('photo');
            // Garbing the original image name
            $imageName = $image->getClientOriginalName();
            // Changing the name
            $newImageName = time().'-'.$imageName;
            // intervention Make image
            $imageResize = Image::make($image->getRealPath());
            // fitting image
            $imageResize->fit( 800, 480);
            // saving image
            $imageResize->save(public_path('storage/uploads/'.$newImageName), 80);
        }

        //saving to database

        $store = new News();
        $store->title = $request->title;
        $store->slug = $slug;
        $store->body = $request->body;
        $store->image = $newImageName;
        $store->meta_tags = $request->tags;
        $store->meta_description = $request->meta_description;
        $store->author_id = 0;
        $store->category_id = $request->category;
        $store->on_featured = $request->featured;
        $store->on_breaking = $request->breaking;
        $store->views = 0;
        $store->status = 0;
        $store->save();
        toast('News Published successfully!', 'success');
        return redirect()->route('admin.news.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        $categories = Category::all();
        return view('backend.pages.news.edit', compact('news', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = News::find($id);

        //field validation
        $request->validate([
            'title' => 'required|max:260',
            'body' => 'required',
            'tags' => 'required|max:260',
            'meta_description' => 'required',
            'category' => 'required',
        ]);


        //making slug of title
        $hasTitle = News::where('title', $request->title)->get();
        if(count($hasTitle) > 1){
            $slug = makeSlug($request->title).'-'.bnNum(mt_rand(0, 9999999));
        }else{
            $slug = makeSlug($request->title);
        }


         /**
          * Image resizing and saving in defined dirs
          */
          if($request->hasFile('photo')){
              //validate
              $request->validate([
                'photo' => 'required|image|max:3000',
              ]);
            $image = $request->file('photo');
            // Garbing the original image name
            $imageName = $image->getClientOriginalName();
            // Changing the name
            $newImageName = time().'-'.$imageName;
            // intervention Make image
            $imageResize = Image::make($image->getRealPath());
            // fitting image
            $imageResize->fit( 800, 480);
            // saving image
            $imageResize->save(public_path('storage/uploads/'.$newImageName), 80);
            //deleting old image
            File::delete(public_path('storage/uploads/'.$update->image));
        }

        //saving to database

        
        $update->title = $request->title;
        $update->slug = $slug;
        $update->body = $request->body;
        if($request->hasFile('photo')){
            $update->image = $newImageName;
        }
        $update->meta_tags = $request->tags;
        $update->meta_description = $request->meta_description;
        $update->author_id = 0;
        $update->category_id = $request->category;
        $update->on_featured = $request->featured;
        $update->on_breaking = $request->breaking;
        $update->views = 0;
        $update->status = 0;
        $update->save();
        toast('News Updated successfully!', 'success');
        return redirect()->route('admin.news.index');
    }

    public function trashIndex()
    {
        return view('backend.pages.news.trash');
    }

    public function trashResponse()
    {
        
        $news = News::select('id', 'image' , 'title')->where('status', 2);
        
        return Datatables::of($news)
        ->addIndexColumn()
        ->addColumn('image', function($news){
            $url = asset("storage/uploads/$news->image");
            return '<img src='.$url.' border="0" width="100" class="img-fluid" align="center" />';
        })
        ->addColumn('action', function($news){
            
            return '<a href="" data-id="'.$news->id.'" onclick="event.preventDefault()" class="btn btn-primary btn-restore">Restore</a>
            <a href="" onclick="event.preventDefault()" class="btn-delete btn btn-danger" data-id="'.$news->id.'">Delete</a>
            ';
        })->rawColumns(['image','action'])
        ->make(true);
    }


    public function recoverTrash($id)
    {
        $recover = News::find($id);
        $recover->status = 1;
        $recover->save();
    }


    public function trash($id)
    {
        $trash = News::find($id);
        $trash->status = 2;
        $trash->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = News::find($id);
        $delete->delete();
        toast('News Deleted successfully!', 'success');
    }
}
