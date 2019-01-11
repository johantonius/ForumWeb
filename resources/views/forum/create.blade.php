@extends('layouts.app')

@section('content')
<div>
    <h1>Create Forum</h1>
    <form action="/forum/save" method="POST">
        {{ csrf_field() }}
        Title:<br/>
        <input type="text" name="title"><br/>
        @if($errors->has('title'))
            <span>{{ $errors->first('title') }}</span>
        @endif<br>
        Category:<br/>
        <select name="category" id="">
            @foreach ($categories as $i)
               <option value="{{ $i->id }}">{{ $i->name }}</option> 
            @endforeach
        </select>
         @if($errors->has('category'))
            <span>{{ $errors->first('category') }}</span>
        @endif
        <br>
        <br>
        Description:<br/>
        <input type="text" name="description"><br/><br/>
         @if($errors->has('description'))
            <span>{{ $errors->first('description') }}</span>
        @endif
        <br>
        <input type="submit" value="Create Forum">
    </form>
</div>
@stop
