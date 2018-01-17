<?php

namespace rlf\Http\Controllers;

use Illuminate\Http\Request;

use rlf\Http\Requests;

use rlf\Invite;

use DB;

use Excel;
use Response;

use Illuminate\Support\Facades\Input;

use Illuminate\Database\Eloquent\Collection;

class listtwoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $invite =Invite::all();

        return view('rlf.listtwo')
                ->with('invite',$invite);
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
        $user->companyname        =Input::get('companyname');
        $user->title              =Input::get('title');
        $user->telephone          =Input::get('telephone');
        $user->email              =Input::get('email');
        $user->wife               =Input::get('wife');

        $user->save();

        return redirect("/listtwo");
    }
    public function uploadCsv(Request $request){
        // $csv = new Invitation();
        // $file = $request->file('upload_file');

        // $csv = LOAD DATA INFILE '$file' INTO TABLE products 
        // FIELDS TERMINATED BY ',' ENCLOSED BY '"' LINES TERMINATED BY '\r\n'
        // IGNORE 1 LINES;

        $path = $request->file('import_file')->getRealPath();
        $data = Excel::load($path, function($reader) {})->get();
        if(!empty($data) && $data->count())
        {
            foreach ($data->toArray() as $key => $value) {
                    $insert[] = [
                    'suffix'        => $value['suffix'],
                    'firstname'     => $value['firstname'],
                    'lastname'      => $value['lastname'], 
                    'sex'           => $value['sex'],
                    'companyname'   => $value['companyname'],
                    'category'      => $value['category'],
                    'title'         => $value['title'],
                    'telephone'     => $value['telephone'],
                    'email'         => $value['email'],
                    'wife'          => $value['wife']];
            
            }
 
            if(!empty($insert))
            {
                DB::table('invite')->insert($insert);
                    return back()->with('success','Insert Record successfully.');
            }
        }
 
        return back()->with('error','Please Check your file, Something is wrong there.');
    
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
        $user                     =Invite::find($id);
        $user->firstname          =$request->Input('firstname');
        $user->lastname           =$request->Input('lastname');
        $user->sex                =$request->Input('sex');
        $user->companyname        =$request->Input('companyname');
        $user->telephone          =$request->Input('telephone');
        $user->email              =$request->Input('email');
        $user->wife               =$request->Input('wife');
        $user->title              =$request->Input('title');
        $user->category           =$request->Input('category');
        $user->suffix             =$request->Input('suffix');

        if($user->save())
            return redirect('/listtwo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $invite     =Invite::findOrfail($id)->delete();
                return redirect('/listtwo') ;
    }
}
