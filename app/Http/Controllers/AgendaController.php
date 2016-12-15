<?php

namespace rlf\Http\Controllers;

use Illuminate\Http\Request;

use rlf\Http\Requests;

use rlf\Agenda;

use DB;

use Response;

use Illuminate\Support\Facades\Input;

use Illuminate\Database\Eloquent\Collection;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

        $agenda      =Agenda::all();

        return view('rlf.agenda')
                ->with('agenda',$agenda);
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
        $user                     =new agenda;
        $user->start_date         =Input::get('start_date');
        $user->end_date           =Input::get('end_date');
        $user->title              =Input::get('title');
        $user->description        =Input::get('description');
        $user->address            =Input::get('address');

        $user->save();

        return redirect("/agenda");
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
        
        $agenda                     =agenda::find($id);
        $agenda->start_date         =$request->Input('start_date');
        $agenda->end_date           =$request->Input('end_date');
        $agenda->title              =$request->Input('title');
        $agenda->address            =$request->Input('address');
        $agenda->description        =$request->Input('description');

        if($agenda->save())
            return redirect('/agenda');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agenda     =Agenda::findOrfail($id)->delete();
                return redirect('/agenda') ;
    }
}
