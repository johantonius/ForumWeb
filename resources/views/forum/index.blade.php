@extends('layouts.app')

@section('content')
<a href="{{ route('f.create') }}">Add Forum</a>
<div>
    @foreach($forums as $forum)
    <a href="forums/{{$forum->id}}">{{ $forum->title }}</a>
        <h5>Category: {{ $forum->category->name }}</h5>
        <h5>Owner : {{ $forum->user->name}}</h5>
        <h5>Posted at : {{$forum->created_at}}</h5><br>
        <h5>Description :{{ $forum->description }}</h5>
        @if($forum->user_id==Auth::user()->id)
        <a href="{{route('f.edit', ['id' => $forum->id])}}">Edit</a>
        <a href="{{route('f.delete', ['id' => $forum->id])}}">Close</a>
        @endif
        <hr>
    @endforeach
</div>
@stop