@extends('layouts.app')

@section('content')
<h1>MASTER CATEGORY</h1>
<a href="#">Add Category</a>
<div>
    @foreach($categories as $category)
        <h5>ID</h5>
        {{ $category->id }}<br/>
        <h5>Category Name</h5>
        {{ $category->name }}<br/>
        <br>
        <a href="#">Edit</a>
        <a href="#">Delete</a>
        <hr>
    @endforeach
</div>
@stop