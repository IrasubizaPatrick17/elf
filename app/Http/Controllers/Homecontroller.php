<?php

namespace rlf\Http\Controllers;

use Illuminate\Http\Request;

use rlf\Agenda;

use rlf\Speaker;

use rlf\Sponsor;

use rlf\slide;

use DB;

use Response;

use Illuminate\Support\Facades\Input;

use Illuminate\Database\Eloquent\Collection;

class Homecontroller extends Controller
{
    


     public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $agenda         =Agenda::all()->count();
        $sponsor        =Sponsor::all()->count();
        $slide          =Slide::all()->count();
        $speaker        =Speaker::all()->count();
        return view('home')
                    ->with('speaker',$speaker)
                    ->with('slide',$slide)
                    ->with('sponsor',$sponsor)
                    ->with('agenda',$agenda);

       return view('home');


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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
