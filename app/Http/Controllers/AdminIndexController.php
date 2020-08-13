<?php

namespace App\Http\Controllers;

use App\adminIndex;
use App\Contact;
use App\news;
use App\gallery;
use App\event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminIndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $news=DB::table('news')->count();
        $gallery=DB::table('gallery')->count();
        $events=DB::table('events')->count();
        $contacts=DB::table('contacts')->count();

        return view('zeus.index',['news'=>$news,'gallery'=>$gallery,'events'=>$events,'contacts'=>$contacts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\adminIndex  $adminIndex
     * @return \Illuminate\Http\Response
     */
    public function show(adminIndex $adminIndex)
    {
       $contact=Contact::all();
       return view('zeus.contact',['contact'=>$contact]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\adminIndex  $adminIndex
     * @return \Illuminate\Http\Response
     */
    public function edit(adminIndex $adminIndex)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\adminIndex  $adminIndex
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, adminIndex $adminIndex)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\adminIndex  $adminIndex
     * @return \Illuminate\Http\Response
     */
    public function destroy(adminIndex $adminIndex)
    {
        //
    }
}
