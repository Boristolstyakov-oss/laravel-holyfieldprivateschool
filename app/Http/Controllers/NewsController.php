<?php

namespace App\Http\Controllers;

use App\news;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $newss=news::latest()->paginate(4);
        return view('adminblog.index',['newss'=>$newss]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminblog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {

        $file = $request->file('picture');
        request()->validate([
            'title'=>'required','details'=>'required','poster'=>'required'
        ]);
        $details = $request->input('details');
        $poster = $request->input('poster');
        $title = $request->input('title');
        //Display File Name
        // echo 'File Name: '. date('YmdHis') . "." .$file->getClientOriginalName();
        $path= date('YmdHis') . "." . $file->getClientOriginalName();
        // echo 'File Extension: '.$file->getClientOriginalExtension();
        // echo 'File Real Path: '.$file->getRealPath();
        // echo 'File Size: '.$file->getSize();
        // echo 'File Mime Type: '.$file->getMimeType();
        $destinationPath = 'images/newsimages/';
        $fullpath=$destinationPath.$path;
        $news=news::create([
            'title'=>$title,
            'image'=>$fullpath,
            'details'=>$details,
            'poster'=>$poster,
            ]);
            if($news)
            {
                $file->move($destinationPath,$path);
                $newss=news::latest()->paginate(4);
                return view('adminblog.index',['newss'=>$newss]);

            }

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id= null)
    {
        // dd($id);
        $news=news::where('id',$id)->first();

        // var_dump($news);
        return view('adminblog.edit',['news'=>$news]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, news $news)
    {
        //
        request()->validate([
            'title'=>'required','details'=>'required','poster'=>'required'
        ]);

        $newsid=$request->input('id');
        $update=news::where('id',$newsid)
        ->update
        ([
            'title'=>$request->input('title'),
            'poster'=>$request->input('poster'),
            'details'=>$request->input('details')
        ]);

        if($update)
        {
            $newss=news::latest()->paginate(4);
        return view('adminblog.index',['newss'=>$newss]);
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\news  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $news=news::where('id',$id)->first();
        $image= $news->image;

        if($news->delete())
        {
            unlink(public_path($image));
            $newss=news::latest()->paginate(4);
            return view('adminblog.index',['newss'=>$newss]);
        }


    }
}
