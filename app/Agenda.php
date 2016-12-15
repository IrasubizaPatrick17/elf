<?php

namespace rlf;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    protected $table    	="agenda";
    protected $fillable		=['id','start_date','end_date','title','description','address'];
}
