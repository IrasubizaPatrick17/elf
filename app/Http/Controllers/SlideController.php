<?php

namespace rlf\Http\Controllers;

use Illuminate\Http\Request;

use rlf\slide;

use DB;

use Response;

use Illuminate\Support\Facades\Input;

use Illuminate\Database\Eloquent\Collection;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $slide       =slide::all();

        return view('rlf.slide')
                     ->with('slide',$slide);
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

        $user                    =new slide;
        $user->picha             =$filename;

        $user->save();
        // Picha::make($filename->getRealPath())->resize(200, 200)->save($user);
        
        $request->file('picha')->move(public_path().'/picha',$filename);

        return redirect("/slide");
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

        $slide                    =slide::find($id);
        $slide->picha             =$filename;

        $slide->save();
        
        
        $request->file('picha')->move(public_path().'/picha',$filename);

        return redirect("/slide");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $slide     =Slide::findOrfail($id)->delete();
                return redirect('/slide') ;
    }
}

