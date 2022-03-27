@extends('layout')
@section('title')
 All categories
@endsection

@section('main')
    <h1 style="font-weight: bold" class="text-center p-5">All categories</h1>
    <a style="text-decoration: none ; color:red " href="{{route('create')}}">Create New Category</a>
    <form  method="get" action="{{ route('search')}}">
        <div class="mb-3 d-flex justify-content-center align-items-end">
            <input type="text" name="keyword" placeholder="search" class="form-control" id="exampleInputName" >
            <input type="submit" value="Search" class="btn btn-primary mt-4">

        </div>
    </form>


    @foreach ($cats as $cat )
    <a style="text-decoration: none"  href="{{route('show',$cat->id)}}"><h3 class="pt-3">{{$cat ->id}}-{{$cat ->name}}</h3></a>
    <img src=" {{ asset ("uploads/$cat->img")}}" height=100px>
    <div>
        <a style="text-decoration: none" class="pr-3" href="{{route('edit' ,$cat->id)}}">Edit</a>
        <a style="text-decoration: none ; color:red " href="{{route('delete' ,$cat->id)}}">Delete</a>
    </div>

    <p>{{$cat ->desc}}</p>

    <hr>
    @endforeach
    {{$cats->links()}}
@endsection










