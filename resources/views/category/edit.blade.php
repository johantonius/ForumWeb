@extends('layouts.app')

@section('content')
<h1>MASTER CATEGORY</h1>
<div class="container" style="margin-top:30px">
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading"><h3 class="panel-title"><strong>Edit Category </strong></h3></div>
            <div class="panel-body">
                <form role="form" method="POST" action="{{ url('/categories/edit/update/' . $category->id) }}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" name="category_name" class="form-control" value="{{ $category->name }}" id="exampleInputEmail1">
                    </div>
                    <button type="submit" class="btn btn-sm btn-default">Update</button>
                </form>
            </div>
        </div>
    </div>
    @endsection