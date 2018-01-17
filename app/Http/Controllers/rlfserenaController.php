<?php

namespace rlf\Http\Controllers;

use Illuminate\Http\Request;

use rlf\Invite;

use\rlf\Nbtwo;

use DB;

use Response;

use Illuminate\Support\Facades\Input;

use Illuminate\Database\Eloquent\Collection;

class rlfserenaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nbtwo =Nbtwo::all();
        return view('rlf.invitationtwo')
                 ->with('nbtwo',$nbtwo);
        //
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
       
        $user                     =new Invite;
        $user->firstname          =Input::get('firstname');
        $user->lastname           =Input::get('lastname');
        $user->sex                =Input::get('sex');
        $user->suffix             =Input::get('suffix');
        $user->category           =Input::get('category');
        $user->companyname        =Input::get('companyname');
        $user->title              =Input::get('title');
        $user->telephone          =Input::get('telephone');
        $user->email              =Input::get('email');
        $user->wife               =Input::get('wife');

        $user->save();

        return redirect("/confirmation");
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
