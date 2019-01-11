@extends('layouts.app')

@section('content')
<div>
    <h1>Create Forum</h1>
    <form action="/forum/save" method="POST">
        {{ csrf_field() }}
        Title:<br/>
        <input type="text" name="title" value="{{$forum->title}}"><br/>
        Category:<br/>
        <select name="category" id="">
            @foreach ($categories as $i)
               <option value="{{ $i->id }}">{{ $i->name }}</option> 
            @endforeach
        </select>
        <br>
        Description:<br/>
        <input type="text" name="description" value="{{$forum->description}}"><br/><br/>
        <input type="submit" value="Create Forum">
    </form>
</div>
@stop
