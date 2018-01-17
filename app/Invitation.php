<?php

namespace rlf;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
   
    protected $table    	="invitation";
    protected $fillable		=['id','firstname','lastname','companyname','title','telephone','email','sex'];
    public function nb(){
    	return $this->belongsTo('rlf\invitation');
    }
}
