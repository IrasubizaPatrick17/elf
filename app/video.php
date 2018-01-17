<?php

namespace rlf;

use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    protected $table    	="video";
    protected $fillable		=['id','title','url'];
}
