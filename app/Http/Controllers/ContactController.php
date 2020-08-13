<?php

namespace App\Http\Controllers;

use App\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('contact.index');
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
        $name=$request->input('name');
        $subject=$request->input('subject');
        $email=$request->input('email');
        $message=$request->input('message');

        if ($name== "" || $subject =="" || $email=="" || $message=="")
        {
            return  redirect()->route('contact', "<script>alert('Fields cannot appear blank');</script>");
        }
        else
        {

           $contact= contact::create([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'subject'=>$request->input('subject'),
            'message'=>$request->input('message'),
        ]);

            if ($contact)
            {
            return  redirect()->route('contact.index', "<script>alert('Thanks for contacting us... Your message has been recieved');</script>");

                return "<script>alert('Thanks for contacting us')</script";
            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(contact $contact)
    {

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(contact $contact)
    {
        //
    }
}
