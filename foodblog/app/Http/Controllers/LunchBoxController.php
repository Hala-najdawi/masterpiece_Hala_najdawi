<?php

namespace App\Http\Controllers;

use App\Lunch_Box;
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
        $meals=Lunch_Box::paginate(12);
       // dd($posts);
       //return("hello");
       return view('pages/lunchBox',['meals'=>$meals]);
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
     * @param  \App\Lunch_Box  $lunch_Box
     * @return \Illuminate\Http\Response
     */
    public function show($language,$id)
    {
        $post =Lunch_Box::find($id);
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
        //
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
