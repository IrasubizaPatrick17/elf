<?php

namespace rlf\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use rlf\Agenda;

use rlf\Speaker;

use rlf\Sponsor;

use rlf\Slide;

use rlf\Agendatwo;

use rlf\Welcome;

use rlf\Introduction;

class landingpageController extends Controller
{
    public function index()
    {
       $agenda        =Agenda::all();
       $speaker       =Speaker::all();
       $slide         =slide::all();
       $sponsor       =Sponsor::all();
       $agendatwo     =Agendatwo::all();
       $welcome       =Welcome::all();
       $introduction  =Introduction::all();
       


       return view('welcome')
       		->with('agenda',$agenda)
          ->with('sponsor',$sponsor)
       		->with('slide',$slide)
       		->with('speaker',$speaker)
          ->with('welcome',$welcome)
          ->with('introduction',$introduction)
          ->with('agendatwo',$agendatwo);




    }

}
