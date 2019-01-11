<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inbox;
use Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $messages = DB::table('inboxes')->join('users','inboxes.sender_id','=','users.id')->where('receiver_id',Auth::user()->id)->get();
        
        return view('message/inbox', compact('messages'));
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
    public function update(Request $request)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inbox = Inbox::find($id);

        $inbox->delete();
        return redirect()->back();
    }
}
