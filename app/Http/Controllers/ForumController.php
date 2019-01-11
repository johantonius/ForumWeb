<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forum;
use App\Category;
use Auth;
use Illuminate\Support\Facades\Validator;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $forums = Forum::all();
        // dd($forums);
        return view('forum/index', compact('forums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Category::all();
        return view('forum/create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'title'=>'required',
            'category'=>'required',
        ]);
        if($validate->fails()){
            return redirect('/forum/create')->withErrors($validate);
        }
        $forum = new Forum;

        $forum->title = $request->title;
        $forum->category_id = $request->category;
        $forum->description = $request->description;
        $forum->status = "open";
        $forum->user_id = Auth::user()->id;
        //$forum->user_id = 2;
        // $forum->user_id = auth()->user()->id;

        $forum->save();
        return redirect('/forums');
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
        $forum = Forum::find($id);
        $categories = Category::all();
        // dd($forum);
        return view('forum/edit', compact('forum', 'categories'));
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
        $forum = Forum::find($id);

        $forum->title = $request->title;
        $forum->category_id = $request->category;
        $forum->description = $request->description;

        $forum->save();
        return redirect('/forums');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $forum = Forum::find($id);

        $forum->delete();
        return redirect()->back();
    }
}
