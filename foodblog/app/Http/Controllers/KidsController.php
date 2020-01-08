<?php

namespace App\Http\Controllers;
use App\Baby;
use Illuminate\Http\Request;

class KidsController extends Controller
{
    //
    public function index()
    {
        //
        $posts = Baby::select('*')
        ->where('type' ,'smoothie')
        ->get(); // you were missing the get method
        return view('pages/babies',['posts'=>$posts]);
       
      
    }
      /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Baby  $baby
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $posts = Baby::select('*')
        ->where('type' ,'toddler')
        ->get(); // you were missing the get method
        return view('pages/babies',['posts'=>$posts]);
       

    }
    public function open()
    {
        //
        $posts = Baby::select('*')
        ->where('type' ,'smoothie')
        ->get(); // you were missing the get method
        return view('pages/babies',['posts'=>$posts]);
       

    }
}
