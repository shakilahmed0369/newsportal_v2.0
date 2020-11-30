<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\Video;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use Yajra\Datatables\Datatables;
use File;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.video.index');

    }

    public function getResponse()
    {
        $video = Video::select('id', 'caption');
        return Datatables::of($video)
        ->addIndexColumn()->addColumn('video', function(){
            return '<span class=" text-center f-40"><i class="fab fa-youtube text-center"></i></span>';
        })->addColumn('action', function($video){
            $route = route('admin.video.edit', $video->id);
            return '<a href="'.$route.'" class="btn btn-primary btn-edit">Edit</a>
            <a href="" onclick="event.preventDefault()" class="btn-delete btn btn-danger" data-id="'.$video->id.'">Delete</a>
            ';
        })->rawColumns(['action', 'video'])
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.video.create');
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
            'url' => 'required|url',
            'caption' => 'required'
        ]);

        //making slug of caption
        $hasTitle = Video::where('caption', $request->caption)->get();
        if(count($hasTitle) > 1){
            $slug = makeSlug($request->caption).'-'.bnNum(mt_rand(0, 9999999));
        }else{
            $slug = makeSlug($request->caption);
        }

        
        $store = new Video();
        $store->video_link = $request->url;
        $store->caption = $request->caption;
        $store->slug = $slug;
        $store->user_id = 0;
        $store->save();
        toast('Video added successfully!', 'success');
        return redirect()->route('admin.video.index'); 
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
        $video = Video::find($id);
        return view('backend.pages.video.edit', compact('video'));
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
        $update = Video::find($id);
        //validation
        $request->validate([
            'url' => 'required|url',
            'caption' => 'required'
        ]);

        //making slug of caption
        $hasTitle = Video::where('caption', $request->caption)->get();
        if(count($hasTitle) > 1){
            $slug = makeSlug($request->caption).'-'.bnNum(mt_rand(0, 9999999));
        }else{
            $slug = makeSlug($request->caption);
        }

        
        
        $update->video_link = $request->url;
        $update->caption = $request->caption;
        $update->slug = $slug;
        $update->user_id = 0;
        $update->save();
        toast('Video updated successfully!', 'success');
        return redirect()->route('admin.video.index'); 
      
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Video::find($id);
        $delete->delete();
        toast('Item Deleted Successfully!', 'success');
    }
}
