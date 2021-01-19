<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.pages.page.index');
    }

    public function getResponse()
    {
        $page = Page::select('id', 'title');
        return Datatables::of($page)
        ->addColumn('action', function($page){
            $route = route('admin.page.edit', $page->id);
            return '<a href="'.$route.'" class="btn btn-primary btn-edit" data-id="'.$page->id.'">Edit</a>
            <a href="" onclick="event.preventDefault()" class="btn-delete btn btn-danger" data-id="'.$page->id.'">Delete</a>
            ';
        })
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $page = new Page();
        $page->title = $request->title;
        $page->content = $request->content;
        $page->save();
        toast('Page published Successfully!', 'success');
        return redirect()->back();
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
        $page = Page::find($id);
        return view('backend.pages.page.edit', compact('page'));

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
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $page = Page::find($id);
        $page->title = $request->title;
        $page->content = $request->content;
        $page->save();
        toast('Page updated Successfully!', 'success');
        return redirect()->route('admin.page.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = page::find($id);
        $delete->delete();
        toast('Page Deleted Successfully!', 'success');
    }
}
