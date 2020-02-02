<?php

namespace App\Http\Controllers;

use App\Rating;
use App\Baby;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Baby::find('*');
        // ->where('like_count','>=',2)
        $posts=Baby::paginate(6);
         // you were missing the get method
        return view('welcome',['posts'=>$posts]);
        //return view('welcome',['posts'=>$posts]);
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = Baby::select('*')
        ->where('type' ,'toddler')
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
     * @param  \App\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function show(Rating $rating)
    {
        $posts = Baby::select('*')
        ->where('updated_at','>=',2)
        ->get(); // you were missing the get method
        return view('welcome',['posts'=>$post]);
        //return view('welcome',['posts'=>$posts]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function edit(Rating $rating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rating $rating)
    {
        //
    }
}
