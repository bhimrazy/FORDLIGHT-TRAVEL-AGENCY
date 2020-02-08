<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $guarded=[];
    public function surveys(){
        return $this->HasMany('App\Survey');
}
}
