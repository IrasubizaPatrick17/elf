<?php

namespace rlf\Http\Controllers;

use Illuminate\Http\Request;

use rlf\Http\Requests;

use rlf\Agendatwo;

use DB;

use Response;

use Illuminate\Support\Facades\Input;

use Illuminate\Database\Eloquent\Collection;

class AgendatwoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $agendatwo      =Agendatwo::all();

        return view('rlf.agendatwo')
                ->with('agendatwo',$agendatwo);
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
        $user                     =new Agendatwo;
        $user->start_date         =Input::get('start_date');
        $user->end_date           =Input::get('end_date');
        $user->title              =Input::get('title');
        $user->description        =Input::get('description');
        $user->agendaintroduction =Input::get('agendaintroduction');
        $user->address            =Input::get('address');

        $user->save();

        return redirect("/agendatwo");
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
        
        $agendatwo                     =Agendatwo::find($id);
        $agendatwo->start_date         =$request->Input('start_date');
        $agendatwo->end_date           =$request->Input('end_date');
        $agendatwo->title              =$request->Input('title');
        $agendatwo->address            =$request->Input('address');
        $agendatwo->description        =$request->Input('description');
        $agendatwo->agendaintroduction =$request->Input('agendaintroduction');


        if($agendatwo->save())
            return redirect('/agendatwo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agendatwo     =Agendatwo::findOrfail($id)->delete();
                return redirect('/agendatwo') ;
    }
}
