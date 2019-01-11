@extends('layouts.app')

@section('content')
<div>
    <h1>Create Forum</h1>
    <form action="{{route('t.update', ['forumId'=>$id,'id' => $thread->id])}}" method="POST">
        {{ csrf_field() }}
        Content:<br/>
        <input type="text" name="content" value="{{$thread->content}}"><br/>
        
        <input type="submit" value="Save!">
    </form>
</div>
@stop
