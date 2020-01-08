<?php

namespace App\Http\Controllers;

use App\Sweet;
use Illuminate\Http\Request;

class SweetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Sweet::paginate(12);
        // dd($posts);
         return view('pages/sweet',['posts'=>$posts]);
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
     * @param  \App\Sweet  $sweet
     * @return \Illuminate\Http\Response
     */
    public function show($language,$id)
    {
        $post = Sweet::find($id);
        //dd($id);
        return view('pages/recipe-single',['post'=> $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sweet  $sweet
     * @return \Illuminate\Http\Response
     */
    public function edit(Sweet $sweet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sweet  $sweet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sweet $sweet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sweet  $sweet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sweet $sweet)
    {
        //
    }
}
