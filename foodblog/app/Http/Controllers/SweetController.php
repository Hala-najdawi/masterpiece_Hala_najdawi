<?php

namespace App\Http\Controllers;

use App\Sweet;
use App\Baby;
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
        $posts = Baby::select('*')
       ->where('category' ,'sweet')
       ->get();
        //dd($posts);
       
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
        $posts = Baby::select('*')
        ->where('type' ,'jelly')
        ->get(); // you were missing the get method
        return view('pages/babies',['posts'=>$posts]);
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
        $post = Baby::find($id);
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
    public function update(Request $request,$language,$id)
    {
        $post = Sweet::find($id);
       //dd($id);
        $VisitCount= $request->VisitCount;
        // dd($VisitCount);
         $post->visit_count = $VisitCount;
         //dd($post->visit_count);
         
         $post->save();
         return"sweet";
         
        //return redirect()->route('babies.show',[app()->getlocale(),'id'=>$post->id]);
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
