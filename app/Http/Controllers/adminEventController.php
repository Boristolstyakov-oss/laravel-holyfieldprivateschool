<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\event;
class adminEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $eventslist=event::latest()->paginate(10);
        return view('adminevent.index',['lists'=>$eventslist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('adminevent.create');

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
        $image = $request->file('picture');
        request()->validate([
            'date'=>'required','details'=>'required','location'=>'required','date'=>'required','time'=>'required'
        ]);
        $title=$request->input('title');
        $details=$request->input('details');
        $location=$request->input('location');
        $time=$request->input('time');
        $date=$request->input('date');

        $path= date('YmdHis') . "." . $image->getClientOriginalName();
        $destinationPath = 'images/newsimages/';
        $fullpath=$destinationPath.$path;

        $events=event::Create([
            'title'=>$title,'location'=>$location,'detail'=>$details,'date'=>$date,'image'=>$fullpath,'time'=>$time]);

        if($events)
        {


            $image->move($destinationPath,$path);
            $eventslist=event::latest()->paginate(10);
            return view('adminevent.index',['lists'=>$eventslist]);
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
         // dd($id);
         $event=event::where('id',$id)->first();

         // var_dump($news);
         return view('adminevent.edit',['event'=>$event]);
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
        request()->validate([
            'date'=>'required','details'=>'required','location'=>'required','date'=>'required','time'=>'required'
        ]);
        $title=$request->input('title');
        $details=$request->input('details');
        $location=$request->input('location');
        $time=$request->input('time');
        $date=$request->input('date');
        $eventid=$request->input('id');
        $update=event::where('id',$eventid)
        ->update
        ([
            'title'=>$title,
            'detail'=>$details,
            'location'=>$location,
            'date'=>$date,
            'time'=>$time,
        ]);

        if($update)
        {
            $eventslist=event::latest()->paginate(10);
            return view('adminevent.index',['lists'=>$eventslist]);
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event=event::where('id',$id)->first();
        $image= $event->image;

        if($event->delete())
        {
            unlink(public_path($image));
            $eventslist=event::latest()->paginate(10);
            return view('adminevent.index',['lists'=>$eventslist]);
        }
    }
}
