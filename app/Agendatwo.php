<?php
namespace rlf;

use Illuminate\Database\Eloquent\Model;

class Agendatwo extends Model
{
    protected $table    	="agendatwo";
    protected $fillable		=['id','start_date','end_date','title','description','address'];
}

