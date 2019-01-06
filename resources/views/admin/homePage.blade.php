@extends('layouts.app')

@section('content')
<div>
    <h1>Create Forum</h1>
    <form action="/forum/save" method="POST">
        {{ csrf_field() }}
        Title:<br/>
        <input type="text" name="title"><br/>
        Category:<br/>
        <input type="text" name="category"><br/>
        Description:<br/>
        <input type="text" name="description"><br/><br/>
        <input type="submit" value="Create Forum">
    </form>
</div>
 @stop