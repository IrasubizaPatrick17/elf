<?php

namespace rlf;

use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
	protected $table    	="speaker";
    protected $fillable		=['id','first_name','picha','last_name','company_name','biography'];
}
