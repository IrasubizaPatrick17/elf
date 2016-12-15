<?php

namespace rlf\Http\Controllers;


use Illuminate\Http\Request;

use rlf\Sponsor;

use DB;

use Response;

use Illuminate\Support\Facades\Input;

use Illuminate\Database\Eloquent\Collection;

class sponsorsController extends Controller
{/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sponsor       =sponsor::all();

        return view('rlf.sponsorspage')
                     ->with('sponsor',$sponsor);
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

        if ($request->file('logo')->isValid()) {
        
        $filename =$request->file('logo')->getClientOriginalName();
        
        }

        $user                     =new sponsor;
        $user->sponsor_name       =Input::get('sponsor_name');
        $user->logo               =$filename;

        $user->save();

         //logo::make($filename->getRealPath())->resize(200, 200)->save($user);
        
        $request->file('logo')->move(public_path().'/picha',$filename);

        return redirect("/sponsors");


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
       //$filename =$request['picha']->getClientOriginalName();
        if ($request->file('logo')->isValid()) {
        
        $filename =$request->file('logo')->getClientOriginalName();
        
        }

        $sponsor                    =sponsor::find($id);
        $sponsor->sponsor_name      =$request->Input('sponsor_name');
        $sponsor->logo             =$filename;

        $sponsor->save();
        
        
        $request->file('logo')->move(public_path().'/picha',$filename);

        return redirect("/sponsors");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $sponsor     =Sponsor::findOrfail($id)->delete();
                return redirect('/sponsors') ;
    }
}
