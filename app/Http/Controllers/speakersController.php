<?php

namespace rlf\Http\Controllers;

use Illuminate\Http\Request;

use rlf\Speaker;

use DB;

use Response;

use Illuminate\Support\Facades\Input;

use Illuminate\Database\Eloquent\Collection;


class speakersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $speaker       =speaker::all();

        return view('rlf.speakerpage')
                     ->with('speaker',$speaker);

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
        //$filename =$request['picha']->getClientOriginalName();
        if ($request->file('picha')->isValid()) {
        
        $filename =$request->file('picha')->getClientOriginalName();
        
        }

        $user                    =new speaker;
        $user->first_name        =Input::get('first_name');
        $user->last_name         =Input::get('last_name');
        $user->picha             =$filename;
        $user->company_name      =Input::get('company_name');
        $user->title             =Input::get('title');
        $user->bio               =Input::get('bio');

        $user->save();
        //Picha::make($filename->getRealPath())->resize(200, 200)->save($user);
        
        $request->file('picha')->move(public_path().'/picha',$filename);

        return redirect("/speakers");
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
        if ($request->file('picha')->isValid()) {
        
        $filename =$request->file('picha')->getClientOriginalName();
        
        }

        $speaker                    =speaker::find($id);
        $speaker->first_name        =$request->Input('first_name');
        $speaker->last_name         =$request->Input('last_name');
        $speaker->picha             =$filename;
        $speaker->company_name      =$request->Input('company_name');
        $speaker->title             =$request->Input('title');
        $speaker->bio               =$request->Input('bio');

        $speaker->save();
        
        
        $request->file('picha')->move(public_path().'/picha',$filename);

        return redirect("/speakers");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $speaker     =Speaker::findOrfail($id)->delete();
                return redirect('/speakers') ;
    }
}
