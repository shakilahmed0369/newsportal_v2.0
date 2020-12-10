<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Yajra\Datatables\Datatables;
use File;

class GalleryController extends Controller
{
    /**
     * constructor fun
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('permitTo:ReadGallery')->only(['index', 'getResponse']);
        $this->middleware('permitTo:CreateGallery')->only(['store', 'create']);
        $this->middleware('permitTo:UpdateGallery')->only(['update', 'edit']);
        $this->middleware('permitTo:DeleteGallery')->only(['destroy']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.gallery.index');

    }

    public function getResponse()
    {
        $gallery = Gallery::select('id', 'photo', 'caption');
        return Datatables::of($gallery)
        ->addIndexColumn()
        ->addColumn('photo', function($gallery){
            $url = asset("storage/photos/$gallery->photo");
            return '<img src='.$url.' border="0" width="100" class="img-fluid" align="center" />';
        })->addColumn('action', function($gallery){
            $route = route('admin.gallery.edit', $gallery->id);
            return '<a href="'.$route.'" class="btn btn-primary btn-edit" data-id="'.$gallery->id.'">Edit</a>
            <a href="" onclick="event.preventDefault()" class="btn-delete btn btn-danger" data-id="'.$gallery->id.'">Delete</a>
            ';
        })->rawColumns(['action', 'photo'])
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $request->validate([
            'photo' => 'required|image',
            'caption' => 'required'
        ]);

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
          $imageResize->save(public_path('storage/photos/'.$newImageName), 80);
          
      }
        
        $store = new Gallery();
        $store->photo = $newImageName;
        $store->caption = $request->caption;
        $store->save();
        toast('Image added to gallery successfully!', 'success');
        return redirect()->route('admin.gallery.index');   
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
        $gallery = Gallery::find($id);
        return view('backend.pages.gallery.edit', compact('gallery'));
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
        $update = Gallery::find($id);

        //validation
        $request->validate([
            'caption' => 'required|max:260'
        ]);
        

         /**
          * Image resizing and saving in defined dirs
          */
          if($request->hasFile('photo')){
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
          $imageResize->save(public_path('storage/photos/'.$newImageName), 80);
          //deleting old image
          File::delete(public_path('storage/photos/'.$update->photo));
          
      }
        
        if($request->hasFile('photo')){
            $update->photo = $newImageName;
        }
        $update->caption = $request->caption;
        $update->save();
        toast('gallery Updated Successfully!', 'success');
        return redirect()->route('admin.gallery.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Gallery::find($id);
        //deleting image from dir
        File::delete(public_path('storage/photos/'.$delete->photo));
        $delete->delete();
        toast('Item Deleted Successfully!', 'success');
    }
}
