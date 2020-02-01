<?php

namespace App\Http\Controllers;

use App\Lunch_Box;
use App\Baby;
use Illuminate\Http\Request;

class LunchBoxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meals = Baby::select('*')
        ->where('category' ,'lunchbox')
        ->get();
       return view('pages/lunchBox',['meals'=>$meals]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posts = Baby::select('*')
        ->where('type' ,'biscuits&cake')
        ->get(); // you were missing the get method
        return view('pages/view',['posts'=>$posts]);
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
            
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lunch_Box  $lunch_Box
     * @return \Illuminate\Http\Response
     */
    public function show($language,$id)
    {
        $post =Baby::find($id);
        //dd($id);
        return view('pages/recipe-single',['post'=> $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lunch_Box  $lunch_Box
     * @return \Illuminate\Http\Response
     */
    public function edit(Lunch_Box $lunch_Box)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lunch_Box  $lunch_Box
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lunch_Box $lunch_Box)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lunch_Box  $lunch_Box
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lunch_Box $lunch_Box)
    {
        //
    }
}
