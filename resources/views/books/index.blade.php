@extends('layout')
@section('title')
 All Books
@endsection

@section('main')
    <h1 style="font-weight: bold" class="text-center p-5">All Books</h1>
    <a style="text-decoration: none ; color:red " href="{{route('createBook')}}">Create New Book</a>
    {{-- <form  method="get" action="{{ route('search')}}">
        <div class="mb-3 d-flex justify-content-center align-items-end">
            <input type="text" name="keyword" placeholder="search" class="form-control" id="exampleInputName" >
            <input type="submit" value="Search" class="btn btn-primary mt-4">

        </div>
    </form> --}}


    @foreach ($books as $book )
    <a style="text-decoration: none"  href="{{route('showBook',$book->id)}}">
        <h3 class="pt-3">{{$book ->id}}-{{$book ->name}}</h3>
    </a>
    <img src=" {{ asset ("uploads/$book->img")}}" height=100px>
    <div>
        {{-- <a style="text-decoration: none" class="pr-3" href="{{route('editBook' ,$book->id)}}">Edit</a> --}}
        {{-- <a style="text-decoration: none ; color:red " href="{{route('deleteBook' ,$book->id)}}">Delete</a> --}}
    </div>

    <p>{{$book ->desc}}</p>
    <p>Price : {{$book ->price}}</p>

    <hr>
    @endforeach
    {{$books->links()}}
@endsection










