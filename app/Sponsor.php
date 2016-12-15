<?php

namespace rlf;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    protected $table    	="sponsors";
    protected $fillable		=['id','sponsor_name','logo'];
}
