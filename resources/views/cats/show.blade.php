@extends('layout')
@section('title')
Show Categories - {{$cat->name}}
@endsection
@section('main')
    <h1 class="text-center pt-5">Show Categories</h1>
    <hr>
    <h3>{{$cat->id}}-{{$cat->name}}</h3>
    <img src=" {{ asset ("uploads/$cat->img")}}" height=100px>
    <p>{{$cat->desc }}</p>
    <small>created at : {{$cat->created_at}}</small>
    <h5 class='pt-3'>Books : </h5>
    <ul>
        @foreach ($cat->books as $book )
        <li><a href="{{url("/books/show/$book->id")}}">{{$book->name}}</a></li>

        @endforeach
    </ul>
    <a href="{{route('all')}}">Back</a>
@endsection

