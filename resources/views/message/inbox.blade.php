@extends('layouts.app')

@section('content')
<div>
    @foreach($messages as $msg)
        <h5>Name: {{ $msg->name }}</h5>
        <h5>Owner : {{ $msg->message}}</h5>
        <h5>Posted at : {{$msg->created_at}}</h5><br>
        <a href="{{route('i.show', ['id' => $msg->id])}}">View</a>
        <a href="{{route('i.delete', ['id' => $msg->id])}}">Delete</a>
        <hr>
    @endforeach
</div>
@stop