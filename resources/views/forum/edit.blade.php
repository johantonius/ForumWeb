@extends('layouts.app')

@section('content')
<div>
    <h1>Update Forum</h1>
    <form action="{{route('f.update', ['id' => $forum->id])}}" method="POST">
        {{ csrf_field() }}
        Title:<br/>
        <input type="text" name="title"><br/>
        Category:<br/>
        <input type="text" name="category"><br/>
        Description:<br/>
        <input type="text" name="description"><br/><br/>
        <input type="submit" value="Update Forum">
    </form>
</div>
@stop