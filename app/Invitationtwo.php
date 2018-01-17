<?php

namespace rlf;

use Illuminate\Database\Eloquent\Model;

class Invitationtwo extends Model
{
	protected $table    	="invitationtwo";
    protected $fillable		=['id','firstname','lastname','companyname','title','telephone','email','sex','wife'];
}
