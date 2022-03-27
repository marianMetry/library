<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cat;
use Illuminate\Support\Facades\Storage;

class CatController extends Controller
{
    public function index()
    {
        //select * from cats
        $cats = Cat::paginate(3);
        return view('cats.index' , [
            'cats'=> $cats
        ]);
    }

    public function show($id)
    {
        //select * from cats where id = $id
        $cat = Cat::findOrFail($id);
        // dd($cat);
        return view('cats.show' ,[
            'cat' => $cat
        ]);

    }

    public function create()
    {

        return view('cats.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required|string|max:50',
            'desc' =>'required|string',
            'img'=>'required|image|max:1024|mimes:png,jpg'
        ]);
        $imgPath = Storage::putFile("cats", $request->img);
        Cat::create([
            'name' =>$request->name,
            'desc' =>$request->desc,
            'img'  => $imgPath,
        ]);
        return redirect( route('all'));
    }
    public function edit($id)
    {
        $cat = Cat::findOrFail($id);
        return view('cats.edit',[
            'cat' => $cat
        ]);
    }

    public function update($id , Request $request)
    {
        $request->validate([
            'name' =>'required|string|max:50',
            'desc' =>'required|string',
            'img'=>'nullable|image|max:1024|mimes:png,jpg'

        ]);

    $cat = Cat::findOrFail($id);
    $imgPath = $cat ->img;

    if($request->hasFile('img')){
    Storage::delete($imgPath);
    $imgPath = Storage::putFile('cats',$request->img);

    }

        $cat->update([
        'name' => $request->name,
        'desc' => $request->desc,
        'img' => $imgPath,
    ]);
        return redirect( route('all') );
    }
    public function delete($id)
    {
        $cat = Cat::findOrFail($id);
        Storage::delete($cat->img);
        $cat -> delete();
        return redirect( route('all') );
    }

    public function latest($num)
    {
        $cats = Cat::orderBy('id','desc')->take($num)->get();
        return view('cats.latest',[
            'cats' => $cats,
            'num'  => $num
        ]);
    }
    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $cats = Cat::where('name' , 'like',"%$keyword%")->get();
        return view('cats.search',[
            'keyword' =>$keyword,
            'cats'   =>$cats
        ]);
    }
}
