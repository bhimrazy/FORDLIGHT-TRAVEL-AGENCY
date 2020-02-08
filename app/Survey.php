<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{   
    protected $guarded=[];
    public function user(){
            return $this->belongsTo('App\Users');
    }
    
    public function package()
    {
        return $this->belongsTo('App\Package');
    }  
}
