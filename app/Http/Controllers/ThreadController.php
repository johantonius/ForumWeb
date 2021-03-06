<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thread;
use App\Forum;
class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($forumID,Request $request)
    {
        $thread = new Thread;
        $thread->content = $request->content;
        $thread->forum_id = $forumID;

        $thread->user_id = auth()->user()->id;

        $thread->save();
        return redirect('/forums/'.$forumID);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($forumId)
    {
       $threads = Thread::where('forum_id','=',$forumId)->get();
       $forum = Forum::find($forumId);;
        return view('thread/index', compact('threads','forum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($forumID, $id)
    {
        $thread = Thread::find($id);
        $id=$forumID;
        return view('thread/edit', compact('thread','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$forumID, $id)
    {
        $thread = Thread::find($id);
        $thread->content = $request->content;
        $thread->save();
        return redirect('/forums/'.$forumID);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $thread = Thread::find($id);

        $thread->delete();
        return redirect()->back();
    }
}
