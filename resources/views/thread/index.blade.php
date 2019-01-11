@extends('layouts.app')

@section('content')
<a href="{{ route('f.create') }}">Add Forum</a>
<div>
    <form action="/forum/add" method="POST">
        {{ csrf_field() }}
        Content:<br/>
        <input type="text" name="content"><br/>
    </form>
</div>
<div>
    @foreach($threads as $thread)
    <a href="forums/{{$thread->id}}">{{ $thread->title }}</a>
        <h5>Category: {{ $thread->category->name }}</h5>
        <h5>Owner : {{ $thread->user->name}}</h5>
        <h5>Posted at : {{$thread->created_at}}</h5><br>
        <a href="{{route('f.edit', ['id' => $thread->id])}}">Edit</a>
        <a href="{{route('f.delete', ['id' => $thread->id])}}">Delete</a>
        <hr>
    @endforeach
</div>
@stop