@extends('layout')
@section('title')
Add Categories
@endsection
@section('main')
<h1 class="text-center pt-5">Add Categories</h1>
@include('errors.error')
    <form  method="post" action="{{ route('store')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Name Category</label>
            <input type="text" name="name" placeholder="name" class="form-control" id="exampleInputName" >
        </div>
        <div class="form-floating">
            <textarea name="desc" id="" cols="30" rows="10" class="form-control" placeholder="Description" id="floatingTextarea"></textarea>
        </div>
        <div class="mt-3">
            <input type="file" name="img"  class="form-control pb-3" >
        </div>
        <input type="submit" value="Add Category" class="btn btn-primary btn-block mt-4">
    </form>

@endsection
