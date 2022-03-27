@extends('layout')
@section('title')
Edit Categories
@endsection
@section('main')
<h1 class="text-center pt-5">Edit Categories</h1>
    @include('errors.error')
    <form  method="post" action="{{ route('update',$cat->id)}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Name Category</label>
            <input type="text" name="name"  value="{{$cat->name}}" placeholder="name" class="form-control" id="exampleInputName" >
        </div>
        <img src=" {{ asset ("uploads/$cat->img")}}" height=100px>
        <div class="mt-3 mb-3">
            <input type="file" name="img"  class="form-control pb-3" >
        </div>
        <div class="form-floating">
            <textarea name="desc" cols="30" rows="10" class="form-control" placeholder="Description" id="floatingTextarea">{{$cat->desc}}</textarea>
        </div>
        <input type="submit" value="Edit Category" class="btn btn-primary btn-block mt-4">
    </form>
@endsection
