@extends('layouts.app')

@section('content')
<h1>MASTER CATEGORY</h1>
<div class="container" style="margin-top:30px">
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading"><h3 class="panel-title"><strong>Add New Category </strong></h3></div>
            <div class="panel-body">
                <form role="form" method="POST" action="{{ url('/categories') }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="category_name" class="form-control" id="exampleInputEmail1">
                    </div>
                    <button type="submit" class="btn btn-sm btn-default">Add Category</button>
                </form>
            </div>
        </div>
    </div>
    <div>
        @foreach($categories as $category)
        <h5>ID</h5>
        {{ $category->id }}<br/>
        <h5>Category Name</h5>
        {{ $category->name }}<br/>
        <br>
        <a href="{{ url('/categories/edit/' .$category->id) }}">Edit</a>
        <a href="{{ url('/categories/delete/'.$category->id) }}">Delete</a>
        <hr>
        @endforeach
    </div>
    @stop