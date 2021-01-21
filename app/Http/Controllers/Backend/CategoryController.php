<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    /**
     * constructor fun
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
        $this->middleware('permitTo:CreateCategory')->only(['store']);
        $this->middleware('permitTo:ReadCategory')->only(['index', 'getResponse', 'show']);
        $this->middleware('permitTo:UpdateCategory')->only(['update', 'edit']);
        $this->middleware('permitTo:DeleteCategory')->only(['destroy']);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('backend.pages.category.index');
    }

    public function getResponse()
    {
        $category = Category::select('id', 'categoryName', 'categorySlug');
        return Datatables::of($category)
        ->addIndexColumn()
        ->addColumn('action', function($category){
               return '<a href="" onclick="event.preventDefault()" class="btn btn-primary btn-edit" data-id="'.$category->id.'">Edit</a>
                <a href="" onclick="event.preventDefault()" class="btn-delete btn btn-danger" data-id="'.$category->id.'">Delete</a>
                '; 
        })
        ->make(true);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->categoryName){
            $check = Category::where('categoryName', $request->categoryName)->get();
            if(count($check) > 0){
                return response(['error' => 'category already exist']);
            }else{
                $store = new Category();
                $store->categoryName = $request->categoryName;
                $store->categorySlug = makeSlug($request->categoryName);
                $store->save();
                toast('Category Inserted Successfully','success')->position('top-end')->autoClose(2000);
            }
        }  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Category::find($id);
        return response(['data' => $show]);
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
        $update = Category::find($id);
        $update->categoryName = $request->categoryName;
        $update->save();
        toast('Category Updated Successfully','success')->position('top-end')->autoClose(2000);
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Category::find($id);
        $delete->delete();
    }
}
