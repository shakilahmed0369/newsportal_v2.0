<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Intervention\Image\ImageManagerStatic as Image;
use File;

class AdController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth::admin');
        $this->middleware('permitTo:ReadAd')->only(['index', 'getResponse']);
        $this->middleware('permitTo:UpdateAd')->only(['update', 'edit']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.ad.index');
    }

    public function getResponse()
    {
        $ad = Ad::select('id','adname', 'adsize', 'adimage', 'adtype');
        return Datatables::of($ad)
        ->addColumn('adimage',function($ad){
            $url = asset("storage/ad/$ad->adimage");
            return '<img src='.$url.' border="0" width="100" class="img-fluid" align="center" />';
        })->addColumn('action', function($ad){
            $route = route('admin.ad.edit', $ad->id);
            return '<a href="'.$route.'" class="btn btn-primary btn-edit" data-id="'.$ad->id.'">Edit</a>';
        })->rawColumns(['adimage', 'action'])
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $ad = Ad::find($id);
        return view('backend.pages.ad.edit', compact('ad'));
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
        $adUpdate = Ad::find($id);
        if($request->hasFile('adimage')){
        File::delete(public_path('storage/ad/'.$adUpdate->adimage));
        $image = $request->file('adimage');
          // Garbing the original image name
          $imageName = $image->getClientOriginalName();
          // Changing the name
          $newImageName = str_replace(' ', '', time().'-'.$imageName);
          // intervention Make image
          $imageResize = Image::make($image->getRealPath());
          // saving image
          $imageResize->save(public_path('storage/ad/'.$newImageName), 80);
        $adUpdate->adimage = $newImageName;
        }

        $adUpdate->adname = $request->adname;
        $adUpdate->adsize = $request->adsize;
        $adUpdate->adtype = $request->adtype;
        $adUpdate->adurl = $request->adurl;
        $adUpdate->adscript = $request->adscript;
        $adUpdate->save();
        toast('Ad Updated Successfully!', 'success');
        return redirect(route('admin.ad.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}
