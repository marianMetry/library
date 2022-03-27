@extends('layout')
@section('title')
Latest Categories
@endsection

@section('main')
    <h1 style="font-weight: bold" class="text-center p-5">Latest {{$num}} categories</h1>
    <a style="text-decoration: none ; color:red " href="{{route('all')}}">Back to all Category</a>
    @foreach ($cats as $cat )
    <a style="text-decoration: none"  href="{{route('show',$cat->id)}}"><h3 class="pt-3">{{$cat ->id}}-{{$cat ->name}}</h3></a>
    <a style="text-decoration: none" class="pr-3" href="{{route('edit' ,$cat->id)}}">Edit</a>
    <a style="text-decoration: none ; color:red " href="{{route('delete' ,$cat->id)}}">Delete</a>
    <p>{{$cat ->desc}}</p>
    <hr>
    @endforeach
@endsection


