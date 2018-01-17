<?php

namespace rlf;

use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{
   
	protected $table    	="invite";
    protected $fillable		=['id','firstname','lastname','companyname','title','telephone','email','sex','wife'];
}
