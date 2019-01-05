@extends('layouts.app')

@section('content')
<a href="{{ route('f.create') }}">Add Forum</a>
<div>
    @foreach($forums as $forum)
        <h5>Title</h5>
        {{ $forum->title }}<br/>
        <h5>Category</h5>
        {{ $forum->category }}<br/>
        <h5>Description</h5>
        {{ $forum->description }}
        
        <br>
        <a href="{{route('f.edit', ['id' => $forum->id])}}">Edit</a>
        <a href="{{route('f.delete', ['id' => $forum->id])}}">Delete</a>
        <hr>
    @endforeach
</div>
@stop