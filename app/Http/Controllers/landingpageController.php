<?php

namespace rlf\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use rlf\Agenda;

use rlf\Speaker;

use rlf\Sponsor;

use rlf\Slide;


class landingpageController extends Controller
{
    public function index()
    {
       $agenda    =Agenda::all();
       $speaker   =Speaker::all();
       $slide     =slide::all();
       $sponsor   =Sponsor::all();


       return view('welcome')
       		->with('agenda',$agenda)
          ->with('sponsor',$sponsor)
       		->with('slide',$slide)
       		->with('speaker',$speaker);



    }

}
