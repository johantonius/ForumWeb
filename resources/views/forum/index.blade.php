@extends('layouts.app')

@section('content')
<a href="{{ route('f.create') }}">Add Forum</a>
<div>
    @foreach($forums as $forum)
        <a href="">{{ $forum->title }}</a>
        <h5>Category: {{ $forum->category->name }}</h5>
        <h5>Description :{{ $forum->description }}</h5>
        <a href="{{route('f.edit', ['id' => $forum->id])}}">Edit</a>
        <a href="{{route('f.delete', ['id' => $forum->id])}}">Delete</a>
        <hr>
    @endforeach
</div>
@stop