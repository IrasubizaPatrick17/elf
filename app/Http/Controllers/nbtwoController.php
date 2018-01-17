<?php

namespace rlf\Http\Controllers;


use Illuminate\Http\Request;

use rlf\Http\Requests;

use rlf\Nbtwo;

use DB;

use Response;

use Illuminate\Support\Facades\Input;

use Illuminate\Database\Eloquent\Collection;

class nbtwoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $nbtwo      =Nbtwo::all();

        return view('rlf.nbyouth')
                ->with('nbtwo',$nbtwo);
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
        $user                     =new Nbtwo;
        $user->nbyouth             =Input::get('nbyouth');

        $user->save();

        return redirect("/nbtwo");
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
        
        $nbtwo                     =Nbtwo::find($id);
        $nbtwo->nbyouth            =$request->Input('nbyouth');


        if($nbtwo->save())
            return redirect('/nbtwo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nbtwo     =Nbtwo::findOrfail($id)->delete();
                return redirect('/nbtwo') ;
    }
}
