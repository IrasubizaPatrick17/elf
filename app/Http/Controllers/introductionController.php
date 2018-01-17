<?php

namespace rlf\Http\Controllers;

use Illuminate\Http\Request;

use rlf\Http\Requests;

use rlf\Introduction;

use DB;

use Response;

use Illuminate\Support\Facades\Input;

use Illuminate\Database\Eloquent\Collection;

class introductionController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $introduction      =Introduction::all();

        return view('rlf.introduction')
                ->with('introduction',$introduction);
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
        $user                     =new Introduction;
        $user->title               =Input::get('title');
        $user->introduction        =Input::get('introduction');

        $user->save();

        return redirect("/introduction");
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
        
        $introduction                     =Introduction::find($id);
        $introduction->title              =$request->Input('title');
        $introduction->introduction       =$request->Input('introduction');


        if($introduction->save())
            return redirect('/introduction');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $introduction     =Introduction::findOrfail($id)->delete();
                return redirect('/introduction') ;
    }
}