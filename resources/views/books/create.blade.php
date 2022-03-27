@extends('layout')
@section('title')
Add Books
@endsection
@section('main')
<h1 class="text-center pt-5">Add Books</h1>
@include('errors.error')
    <form  method="post" action="{{ route('storeBook')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Name Book</label>
            <input type="text" name="name" placeholder="name" class="form-control" id="exampleInputName" >
        </div>
        <div class="form-floating">
            <textarea name="desc" id="" cols="30" rows="10" class="form-control" placeholder="Description" id="floatingTextarea"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Price Book</label>
            <input type="number" name="price" placeholder="Price Book" class="form-control" id="exampleInputName" >
        </div>
        <div class="mt-3">
            <input type="file" name="img"  class="form-control pb-3" >
        </div>
    <div class="pt-3">
        <select name="cat_id" class="form-select">
            @foreach ($cats as $cat )
            <option value="{{$cat->id}}">{{ $cat->name}}</option>
            @endforeach
        </select>
    </div>
        <input type="submit" value="Add Book" class="btn btn-primary btn-block mt-4">
    </form>

@endsection
