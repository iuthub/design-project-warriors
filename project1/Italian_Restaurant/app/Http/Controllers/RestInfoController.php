<?php

namespace App\Http\Controllers;

use App\Rest_Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class RestInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $table = new Rest_Info;
        $table->Rest_name = $request->input("restname");
        $table->Address = $request->input("address");
        $table->Rest_number = $request->input("number");
        $table->Email = $request->input("mail");
        return redirect('/');
    }

    // public function submit(Request $request){
    //     $table = new Rest_Info;
    //     $table->Rest_name = $request->input("restname");
    //     $table->Address = $request->input("address");
    //     $table->Rest_number = $request->input("number");
    //     $table->Email = $request->input("mail");
    //     return redirect('/');
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rest_Info  $rest_Info
     * @return \Illuminate\Http\Response
     */
    public function show(Rest_Info $rest_Info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rest_Info  $rest_Info
     * @return \Illuminate\Http\Response
     */
    public function edit(Rest_Info $rest_Info)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rest_Info  $rest_Info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rest_Info $rest_Info)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rest_Info  $rest_Info
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rest_Info $rest_Info)
    {
        //
    }
}
