<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gallery;

class admingalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $galleries=gallery::latest()->paginate(12);
        return view('admingallery.index',['galleries'=>$galleries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admingallery.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $image = $request->file('image');
        request()->validate(['caption'=>'required']);
        $caption=$request->input('caption');


        $path= date('YmdHis') . "." . $image->getClientOriginalName();
        $destinationPath = 'images/newsimages/';
        $fullpath=$destinationPath.$path;

        $gallery=gallery::Create([
            'caption'=>$caption,'image'=>$fullpath]);

        if($gallery)
        {
            $image->move($destinationPath,$path);
            $galleries=gallery::latest()->paginate(12);
            return view('admingallery.index',['galleries'=>$galleries]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery=gallery::where('id',$id)->first();
        $image= $gallery->image;

        if($gallery->delete())
        {
            unlink(public_path($image));
            $galleries=gallery::latest()->paginate(12);
            return view('admingallery.index',['galleries'=>$galleries]);
        }
    }
}
