@extends('layout')
@section('title')
Show Books - {{$book->name}}
@endsection
@section('main')
    <h1 class="text-center pt-5">Show Books</h1>
    <hr>
    <h3>{{$book->id}}-{{$book->name}}</h3>
    <h4>Category : <a href="{{url("/cats/show/".$book->cat->id)}}">{{$book->cat->name}}</a></h4>
    <img src=" {{ asset ("uploads/$book->img")}}" height=100px>
    <p>{{$book->desc }}</p>
    <small>created at : {{$book->created_at}}</small>
    <a href="{{route('allBook')}}">Back</a>
@endsection

