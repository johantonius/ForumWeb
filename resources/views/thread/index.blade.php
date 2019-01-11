@extends('layouts.app')

@section('content')
<div>
   <h5>Category: {{ $forum->category->name }}</h5>
    <h5>Owner : {{ $forum->user->name}}</h5>
    <h5>Posted at : {{$forum->created_at}}</h5><br>
    <h5>Description :{{ $forum->description }}</h5>
</div>
<div>
    <form action="/forums/{{$forum->id}}/add" method="POST">
        {{ csrf_field() }}
        Content:<br/>
        <input type="text" name="content"><br/>
        <input type="submit" value="Post">
    </form>
</div>
<div>
    @foreach($threads as $thread)
    <h5>{{ $thread->content }}</h5>
       
        <h5>Owner : {{ $thread->user->name}}</h5>
        <h5>Posted at : {{$thread->created_at}}</h5><br>
         @if($thread->user_id==Auth::user()->id)
        <a href="{{route('t.edit', ['forumId'=>$forum->id,'id' => $thread->id])}}">Edit</a>
        <a href="{{route('t.delete', ['forumId'=>$forum->id,'id' => $thread->id])}}">Delete</a>
        @endif
        <hr>
    @endforeach
</div>
@stop