<?php

namespace rlf;

use Illuminate\Database\Eloquent\Model;

class Welcome extends Model
{
   protected $table    	="welcomemessage";
    protected $fillable		=['id','title','description'];
}
